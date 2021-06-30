'use strict';
const URL = document.URL.split('public')[0];

let map;

    function initialize(){
        var coordenadas = {lat: -23.552925305071476, lng: -46.39960872738754};
       
        let mapa = new google.maps.Map(document.getElementById('mapa'),{
            zoom: 15,
            center: coordenadas,
            mapTypeId: 'roadmap'
        });

        let marker = new google.maps.Marker({
            position: coordenadas,
            title: "Shoes :-D",
            map: mapa,
            icon: URL+"public/img/vectors/logo.ico"
        });
        
    }
    initialize();



const form = document.querySelector('#grid form');
form.addEventListener('submit', async (ev)=>{
    ev.preventDefault();
    let i=0;
        let inputs = form.querySelectorAll("input");
        let interval = setInterval(() => {
        if(i==4)i=0;
        let dots =+ i;
        if(dots ==0){
            inputs[inputs.length-1].value = 'Enviando';
        }
        if(dots ==1){
            inputs[inputs.length-1].value = 'Enviando.';
        }
        if(dots ==2){
            inputs[inputs.length-1].value = 'Enviando..';
        }
        if(dots ==3){
            inputs[inputs.length-1].value = 'Enviando...';
        }
        i++;
    }, 500);
    let formData = new FormData(form);
    let req = await fetch(`${URL}public/contact/sendEmail`,
    {
        body: formData,
        method: 'POST',
    });
    let res = await req.json();
    console.log(res);
    if(res.status == 'ok'){
        showAlert('Ebaaa', res.message,'success');
        for (let i = 0; i < inputs.length-1; i++) {
            inputs[i].value = "";
        }
        form.querySelector("textarea").value = '';
    }else{
        showAlert('Ops...', res.message,'error');
    }
    clearInterval(interval);
    inputs[inputs.length-1].value = 'Enviar';

})

function showAlert(title,message,icon){
    swal({
        title: title,
        text: message,
        icon: icon,
    });
}