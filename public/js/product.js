'use strict';
document.querySelector('form')
.addEventListener('submit',readToLike);
function readToLike(e){
    e.preventDefault();
    let {target} = e;
    let url = target.getAttribute('action')+'/'+document.querySelector('#string').value;
    console.log(url);
    target.setAttribute('action', url);
    target.submit(); 
    
}