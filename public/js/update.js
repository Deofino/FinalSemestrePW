
'use strict';
let inputs = document.querySelectorAll('#update a');
let main = document.querySelector("#update")
inputs.forEach(a => {
    a.addEventListener('click', ev => {
        ev.preventDefault();
        let url = a.getAttribute('href');
        // main.innerHTML = ''
    })
})
