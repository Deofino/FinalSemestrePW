
'use strict';
let URL = document.URL.split('admin')[0];
let inputs = document.querySelectorAll('#update a');
let main = document.querySelector("#update")
inputs.forEach(a => {
    a.addEventListener('click', async ev => {
        ev.preventDefault();
        let url = a.getAttribute('href');
        let reqData = await fetch(url);
        let resData = await reqData.json();
        console.table(resData);
        let reqCategories = await fetch(`${URL}category/read`)
        let reqBrand = await fetch(`${URL}brand/read`);
        let resCategories = await reqCategories.json();
        let resBrand = await reqBrand.json();
        let optionsBrand = resBrand.map(el=>{
            return `<option value='${el._id}'>${el.nameBrand}</option>`
        })
        let optionsCategory = resCategories.map(el=>{
            return `<option value='${el._id}'>${el.nameCategory}</option>`
        })
        let chipsColors = JSON.parse(resData.colorsShoe).map(el=>{
            return `<div class='chip'><span>${el}</span><button type='button'><i class='fas fa-times btn_delete_color'></i></button></div>`;
        });
        main.innerHTML =
            `
       <div id="l_form" class="visible">
       <button id="close">
           <i class="fas fa-times"></i>
       </button>
       <form action="" method="post" class="form">
           <div class="form-item col">
               <input type="text" name="name" value="${resData.nameShoe}" placeholder="Produto" id="name" class="item-input" required maxlength="100" minlength="5">
           </div>
           <div class="form-item col">
               <textarea name="description" placeholder="Descricao" id="description" rows="4" required maxlength="200" minlength="5" value="${resData.descriptionShoe}">${resData.descriptionShoe}</textarea>
           </div>
           <div class="form-item radio">
               <label for="rmasc">
                   <input type="radio" id="rmasc" name="radio" class="item-input">
                   <span class="label">Masculino</span>
               </label>
               <label for="rfemi">
                   <input type="radio" id="rfemi" name="radio" class="item-input">
                   <span class="label">Feminino</span>
               </label>
               <label for="funi">
                   <input type="radio" id="runi" name="radio" class="item-input">
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
                   <img src="${URL+resData.dirImageShoe}" alt='${resData.nameShoe}'>
               </div>
               <input type="file" hidden accept="image/*" id="image" name="image">
           </div>
           <div class="form-item col">
               <button type="submit">Atualizar</button>
           </div>
       </form>
   </div>`

        if (resData.genderShoe == 'Masculino') {
            document.querySelector('#rmasc').setAttribute('checked','true');
        }
        if(resData.genderShoe == 'Feminino'){
            document.querySelector('#rfemi').setAttribute('checked','true');
        }
        if(resData.genderShoe == 'Unissex'){
            document.querySelector('#runi').setAttribute('checked','true');
        }
        document.querySelector('#category').innerHTML = optionsCategory;
        document.querySelector('#brand').innerHTML = optionsBrand;
        document.querySelector('#chips').innerHTML = chipsColors;
    })
})
