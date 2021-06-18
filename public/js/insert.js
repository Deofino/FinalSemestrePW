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
        }
    }
})

//Image Preview
const preview = document.querySelector('#product .imagePreview');
const labelImg = document.querySelector('#product .file_image');
preview.classList.add('d-none')
const imgInput = document.querySelector('#image');
imgInput.addEventListener('change', e=>{
    e.preventDefault();
    if(e.target.files[0]){
        labelImg.innerHTML = '<i class="fas fa-upload"></i> Arquivo selecionado'
        let img = window.URL.createObjectURL(e.target.files[0]);
        preview.classList.remove('d-none');
        preview.innerHTML = `<img src='${img}'>`;
    }else{
        labelImg.innerHTML = '<i class="fas fa-upload"></i> Nenhum arquivo selecionado'
        preview.classList.add('d-none')
        preview.removeChild();
    }
})

// Product
