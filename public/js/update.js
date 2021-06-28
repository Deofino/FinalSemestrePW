
'use strict';
let URL = document.URL.split('admin')[0];
let inputs = document.querySelectorAll('#update a');
let main = document.querySelector("#update")
inputs.forEach(a => {
    a.addEventListener('click', async ev => {
        ev.preventDefault();

        // MAKE request to get data on response
        let url = a.getAttribute('href');
        let reqData = await fetch(url);
        let resData = await reqData.json();
        let reqCategories = await fetch(`${URL}category/read`)
        let reqBrand = await fetch(`${URL}brand/read`);
        let resCategories = await reqCategories.json();
        let resBrand = await reqBrand.json();

        
        // CREATE FORM
        createModal(document.querySelector('#c_form'),resData);
        setTimeout(() => {
            document.querySelector('#l_form').classList.toggle('visible');
        }, 100);
        close()
        /* INSERT DATAS */
        insertDatas(resData, resBrand, resCategories);

        /* IMAGE AND COLOR */
        let colors = JSON.parse(resData.colorsShoe);
        addColor(resData, colors);
        removeColor(colors);
        addImage();

        let form = document.querySelector('#l_form form');
        form.addEventListener('submit',async ev=>{
            ev.preventDefault();
            if(verifyChip() &&
             verifyGender() &&
             verifyImage() &&
             verifySelect(document.querySelector('#brand'),'Marca') &&
             verifySelect(document.querySelector('#category'),'Categoria')&&
             verifySimpleField(document.querySelector('#name'))&&
             verifySimpleField(document.querySelector('#description'))&&
             verifySimpleField(document.querySelector('#price')))
             {
                let datas = new FormData(form);
                datas.append('colorsArray', JSON.stringify(colors));
                datas.append('image', resData.dirImageShoe);
                let req = await fetch(form.getAttribute('action'),
                {method:"POST", body:datas,cache:"default", mode:'cors'});
                let res = await req.text();
                console.log(res);
             }
        })


    })
})

function showAlert(title, message, icon) {
    swal({
        title: title,
        text: message,
        icon: icon,
    });
}

function addImage() {
    let imageInput = document.querySelector('#image');
    imageInput.addEventListener('change', ({ target }) => {
        if (target.files.length > 0) {
            let imgPreview = window.URL.createObjectURL(target.files[0]);
            document.querySelector('#preview').innerHTML = `<img src="${imgPreview}" alt='${target.files[0].name}'>`;
        } else {
            document.querySelector('#preview').children[0].remove();
        }
    })
}
function addColor(resData, colors) {
    let containerColor = document.querySelector('.container-button').children;
    containerColor[1].addEventListener('click', e => {
        e.preventDefault();
        if (containerColor[0].value != null && containerColor[0].value.length != 0
            && containerColor[0].value != '' && !colors.includes(containerColor[0].value)) {
            colors.push(containerColor[0].value);
            document.querySelector('#chips').innerHTML += `<div class='chip'><span>${containerColor[0].value}</span><button type='button'><i class='fas fa-times btn_delete_color'></i></button></div>`;
        }
    });
}
function removeColor(colors){
    let chipsButton = document.querySelectorAll('.chip button');
    chipsButton.forEach(el=>{
        el.addEventListener('click',e=>{
            e.preventDefault();
            colors.pop(el.parentElement.children[0].textContent);
            el.parentElement.remove();
        })
    })
}

function verifyChip() {
    if (document.querySelectorAll('.chip').length == 0) {
        showAlert('Eitaa', "Selecione ao menos uma cor", 'warning');
        return false;
    }
    return true;
}
function verifyImage() {
    if (document.querySelector('#preview').children.length == 0) {
        showAlert('Eitaa', "Selecione uma imagem", 'warning');
        return false;
    }
    return true;
}
function verifyGender() {
    if (!document.querySelector(`input[name='radio']:checked`)) {
        showAlert('Eitaa', "Preencha algum genero", 'warning');
        return false;
    };
    return true;
}
function verifySelect(select, name) {
    if (select.options.selectedIndex == 0) {
        showAlert('Eitaa', "Selecione alguma "+name, 'warning');
        return false;
    }
    return true;
}
function verifySimpleField(field){
    if(field.value == '' || field.value.length == 0 || field == null){
        showAlert('Ops...',  'Verifique todos os campos...', 'warning');
        return false;
    } 
    return true;
}

function insertGender(resData) {
    if (resData.genderShoe == 'Masculino') {
        document.querySelector('#rmasc').setAttribute('checked', 'true');
    }
    if (resData.genderShoe == 'Feminino') {
        document.querySelector('#rfemi').setAttribute('checked', 'true');
    }
    if (resData.genderShoe == 'Unissex') {
        document.querySelector('#runi').setAttribute('checked', 'true');
    }
}
function insertSelects(resData) {

    let optionsC = document.querySelector('#category').options;
    let optionsB = document.querySelector('#brand').options;
    let categorySelected = resData.idCategory;
    let brandSelected = resData.idBrand;
    for (let i = 0; i < optionsC.length; i++) {
        const element = optionsC[i];
        if (element.value == categorySelected) {
            optionsC.selectedIndex = i;
        }
    }
    for (let i = 0; i < optionsB.length; i++) {
        const element = optionsB[i];
        if (element.value == brandSelected) {
            optionsB.selectedIndex = i;
        }
    }

}
function insertDatas(resData, resBrand, resCategories) {
    let optionsBrand = resBrand.map(el => {
        return `<option value='${el._id}'>${el.nameBrand}</option>`
    })
    let optionsCategory = resCategories.map(el => {
        return `<option value='${el._id}'>${el.nameCategory}</option>`
    })
    let chipsColors = JSON.parse(resData.colorsShoe).map(el => {
        return `<div class='chip'><span>${el}</span><button type='button'><i class='fas fa-times btn_delete_color'></i></button></div>`;
    });

    insertGender(resData);
    document.querySelector('#category').innerHTML = `<option value="0">Selecione</option>` + optionsCategory;
    document.querySelector('#brand').innerHTML = `<option value="0">Selecione</option>` + optionsBrand;
    document.querySelector('#chips').innerHTML = chipsColors;
    
    insertSelects(resData)
}

function createModal(main,resData) {
    main.innerHTML =
        `
        <div id="l_form">
        <button id="close">
            <i class="fas fa-times"></i>
        </button>
<form action="${URL}product/update/${resData._id}" method="post" class="form">
   <div class="form-item col">
       <input type="text" name="name" value="${resData.nameShoe}" placeholder="Produto" id="name" class="item-input" required maxlength="100" minlength="5">
   </div>
   <div class="form-item col">
       <textarea name="description" placeholder="Descricao" id="description" rows="4" required maxlength="200" minlength="5" value="${resData.descriptionShoe}">${resData.descriptionShoe}</textarea>
   </div>
   <div class="form-item radio">
       <label for="rmasc">
           <input type="radio" id="rmasc" value='Masculino' name="radio" class="item-input">
           <span class="label">Masculino</span>
       </label>
       <label for="rfemi">
           <input type="radio" id="rfemi" value='Feminino' name="radio" class="item-input">
           <span class="label">Feminino</span>
       </label>
       <label for="funi">
           <input type="radio" id="runi" name="radio" value='Unissex' class="item-input">
           <span class="label">Unissex</span>
       </label>
   </div>
   <div class="form-item col">
       <input type="number" name="price" value="${resData.priceShoe}" id="price" placeholder="R$ 0,00" class="item-input">
   </div>
   <div class="form-item col">
       <select name="category" id="category">
           <option value="0">Categoria</option>
       </select>
   </div>
   <div class="form-item col">
       <select name="brand" id="brand">
           <option value="0">Marca</option>
       </select>
   </div>
   <div class="form-item row">
       <div class="container-button">
           <input type="text" id='color' list="colorsList" placeholder="Cores">
           <button>
               <i class="fas fa-plus"></i>
           </button>
       </div>
       <div id="chips">
            <div class='chip'>
                <span>Azul</span>
                <button type='button'><i class='fas fa-times btn_delete_color'></i></button>
            </div>
       </div>
       <datalist id="colorsList">
           <option value="Vermelho">
           <option value="Roxo">
           <option value="Rosa">
           <option value="Azul">
           <option value="Verde">
           <option value="Preto">
           <option value="Cinza">
           <option value="Branco">
           <option value="Colorido">
           <option value="Laranja">
           <option value="Marrom">
         </datalist>
   </div>
   <div class="form-item col column">
       <label for="image">
           <i class="fas fa-upload"></i>
           <span>Nenhum arquivo selecionado</span>
       </label>
       <div id="preview">
           <img src="${URL + resData.dirImageShoe}" alt='${resData.nameShoe}'>
       </div>
       <input type="file" hidden accept="image/*" id="image" name="image">
   </div>
   <div class="form-item col">
       <button type="submit">Atualizar</button>
   </div>
</form>
</div>`
}

function close(){
    let btn = document.querySelector('#close');
    btn.addEventListener('click', e=>{
        document.querySelector('#l_form').classList.remove('visible');
        setTimeout(()=>{
            document.querySelector('#l_form').remove();
        },1000)
    })
}