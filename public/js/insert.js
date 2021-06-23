'use strict';
// alert('ola mundo');
const URL = document.URL.split('admin')[0];
function verifyData(data) {
    if (data !== '' &&
        data !== null &&
        data !== undefined &&
        data.length !== 0) {
        return true;
    } else return false;
}
function verifyAll(data=[]){
    return data.map(el=>{
        if(el==null || el.length == 0 || el == '' || el == undefined){
            return 'error';
        }
    })
}
function loadMessage(div, p, message, type = 'error') {
    if (type == 'error') {
        div.classList.add('error');
        div.classList.remove('success');
        p.innerHTML = message;
    } else {
        div.classList.add('success');
        div.classList.remove('error');
        p.innerHTML = message;
    }
}
function clearData(datas = []) {
    datas.forEach(val => {
        val.value = '';
    })
}

// Brand
let brand = document.querySelector('#brand #brandName');
let divMessageBrand = brand.parentNode.querySelector('.div_message');
let PmessageBrand = divMessageBrand.querySelector('p');
brand.addEventListener('change', evt => {
    evt.preventDefault();
    if (verifyData(brand.value)) {
        loadMessage(divMessageBrand, PmessageBrand, "Famosinha ne", 'success')
    } else {
        loadMessage(divMessageBrand, PmessageBrand, "Coloca uma nike ai sla")
    }
});
document.querySelector('#brand form')
    .addEventListener('submit', async evt => {
        evt.preventDefault();
        if (verifyData(brand.value)) {
            let req = await fetch(URL + "brand/create",
                {
                    cache: "default",
                    method: "POST",
                    mode: "cors",
                    body: JSON.stringify({ brandName: brand.value })
                })
            let res = await req.json();
            if (res.status === 'ok') {
                window.alert(`Marca: ${brand.value} inserido com sucesso!`);
                clearData([brand]);
                divMessageBrand.setAttribute('class', 'div_message');
            }
        }
    });
// End Brand

// Category
let category = document.querySelector('#category #categoryName');
let divMessageCategory = category.parentNode.querySelector('.div_message');
let PmessageCategory = divMessageCategory.querySelector('p');
category.addEventListener('change', evt => {
    evt.preventDefault();
    if (verifyData(category.value)) {
        loadMessage(divMessageCategory, PmessageCategory, "Todo mundo gosta!", 'success')
    } else {
        loadMessage(divMessageCategory, PmessageCategory, "Futebol, Basquete nusei")
    }
});
document.querySelector('#category form')
    .addEventListener('submit', async evt => {
        evt.preventDefault();
        if (verifyData(category.value)) {
            let req = await fetch(URL + "category/create",
                {
                    cache: "default",
                    method: "POST",
                    mode: "cors",
                    body: JSON.stringify({ categoryName: category.value })
                })
            let res = await req.json();
            if (res.status === 'ok') {
                window.alert(`Categoria: ${category.value} inserido com sucesso!`);
                clearData([category]);
                divMessageCategory.setAttribute('class', 'div_message');
            }
        }
    });

// End Category
// Mask
let price = document.querySelector('#price'); 
let mask = IMask(price,{mask:  'R$ 0000[0]'});
// End Mask
// Colors
let btn_add_color = document.querySelector('#add_color');
let color = document.querySelector('#colors');
let colors = [];
btn_add_color.addEventListener('click', e=>{
    e.preventDefault();
    if(verifyData(color.value)){
        if(!colors.includes(color.value)){
            colors.push(color.value);
            let chips = document.querySelector('#chips');
            chips.innerHTML += `<div class='chip'><span>${color.value}</span><button type='button'><i class='fas fa-times btn_delete_color'></i></button></div>`;
            let deleteChip = document.querySelectorAll('#chips .chip button');
            deleteChip.forEach(el=>{
                el.addEventListener('click', (ev)=>{
                    let value = el.parentNode.querySelector('span').textContent;
                    colors.pop(value);
                    el.parentNode.remove();
                })
            })
        }
    }

})

// End Colors

//Image Preview
const preview = document.querySelector('#product .imagePreview');
const labelImg = document.querySelector('#product .file_image');
preview.classList.add('d-none');
let img = null;
const imgInput = document.querySelector('#image');
imgInput.addEventListener('change', e=>{
    e.preventDefault();
    if(e.target.files[0]){
        let reader = new FileReader();
        reader.onloadend = e =>{
            img = e.target.result;
            labelImg.innerHTML = '<i class="fas fa-upload"></i> Arquivo selecionado'
            preview.classList.remove('d-none');
            preview.innerHTML = `<img src='${e.target.result}'>`;
        }
        reader.readAsDataURL(e.target.files[0]);
    }else{
        img = null;
        labelImg.innerHTML = '<i class="fas fa-upload"></i> Nenhum arquivo selecionado'
        preview.classList.add('d-none');
        preview.firstChild.remove();
    }
})

// End Image Preview

// Verify all fields
    const productName = document.querySelector('#product #productName');
    const description = document.querySelector('#product #description');
    const selectBrand = document.querySelector('#product #selectBrand');
    const selectCategory = document.querySelector('#product #selectCategory');
    const form = document.querySelector('#product form');
    form.addEventListener('submit', async(evt)=>{
        evt.preventDefault();
        const gender = document.querySelector("#product input[name='radio']:checked");
        [productName, description, price]
        .forEach(el=>{
            if(verifyData(el.value)){
                loadMessage(el.parentElement.querySelector('.div_message'),el.parentElement.querySelector('.div_message p'),'Tudo certo', 'success');
            }else loadMessage(el.parentElement.querySelector('.div_message'),el.parentElement.querySelector('.div_message p'),'Preencha este campo');
        })
        if(verifyData(gender)){
            loadMessage(gender.parentElement.parentElement.querySelector('.div_message'),gender.parentElement.parentElement.querySelector('.div_message p'),'Preenchido', 'success');
        } else loadMessage(document.querySelector("#product label[for='gender']").parentElement.querySelector('.div_message'),document.querySelector("#product label[for='gender']").parentElement.querySelector('.div_message p'),'Selecione um');
        if(colors.length == 0 || colors == []){
            alert('Adicione ao menos uma cor')
        }
        if(img != null){
            loadMessage(labelImg.parentElement.querySelector('.div_message'),labelImg.parentElement.querySelector('.div_message p'),'Imagem selecionado', 'success');
        }else loadMessage(labelImg.parentElement.querySelector('.div_message'),labelImg.parentElement.querySelector('.div_message p'),'Selecione uma imagem!'); 
        [selectCategory,selectBrand].forEach(el=>{
            if(el.options.selectedIndex){
                loadMessage(el.parentElement.querySelector('.div_message'),el.parentElement.querySelector('.div_message p'),'Selecionado', 'success');
            }else loadMessage(el.parentElement.querySelector('.div_message'),el.parentElement.querySelector('.div_message p'),'Selecione uma');
        });

        if(!verifyAll([
                img,
                colors,
                selectBrand.options.selectedIndex,
                selectCategory.options.selectedIndex,
                productName.value,
                description.value,
                price.value,
                gender,
            ]).includes('error')){
                let formData = new FormData(form);
                formData.append('image', imgInput.files[0]);
                formData.append('colorsArray', JSON.stringify(colors));
                let req = await fetch(`${URL}product/create`,
                {body: formData, method: 'POST',cache: 'default', mode :"cors"})
                let res = await req.json();
                console.log(res);
                if(res.status == 'ok'){
                    alert('Tenis inserido com sucesso!!');
                    setTimeout(() => {
                        window.location.reload();
                    }, 1500);
                }
            }else{
                alert('Ainda ha erros...');
            };
    })
// End verify all fields

// End Product
