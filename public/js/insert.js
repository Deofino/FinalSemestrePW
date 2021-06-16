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