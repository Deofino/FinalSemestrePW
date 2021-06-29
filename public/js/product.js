'use strict';
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

// let links = document.querySelectorAll('.card a');
// links.forEach(el=>{
//     el.addEventListener('click', e=>{
//         e.preventDefault();

//         let url = e.target.href;
//         console.log(url);
//         window.open(url,'_blank');
//     })
// })