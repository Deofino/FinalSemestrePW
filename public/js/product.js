'use strict';
const URL = document.URL.split('public')[0];
document.querySelector('form')
.addEventListener('submit',readToLike);
function readToLike(e){
    e.preventDefault();
    let {target} = e;
    if(document.querySelector('#string').value != '' && document.querySelector('#string').value != null){
        let url = target.getAttribute('action')+'/'+document.querySelector('#string').value;
        target.setAttribute('action', url);
        console.log(url);
        target.submit(); 
    }else{
        let url = document.URL.split('product')[0];
        window.location.href = `${url}product`;
    }
}
document.querySelector('#order')
.addEventListener('change', e=>{
    e.preventDefault();
    let options = e.target.options;
    if(options.selectedIndex == 1){
        window.location.href = `${URL}public/product/ordernar/1`;
    }
    if(options.selectedIndex == 2){
        window.location.href = `${URL}public/product/ordernar/1!`;
    }
    if(options.selectedIndex == 3){
        window.location.href = `${URL}public/product/ordernar/2!`;
    }
    if(options.selectedIndex == 4){
        window.location.href = `${URL}public/product/ordernar/2`;
    }
})

