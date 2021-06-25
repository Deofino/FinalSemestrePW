
'use strict';

const buttonsDeletes = document.querySelectorAll('#delete a');
buttonsDeletes.forEach(a=>{
    a.addEventListener('click',async ev=>{
        ev.preventDefault();
        let url = a.getAttribute('href');
        let req = await fetch(url,{method: "DELETE", cache: 'default', mode: 'cors'})
        let res = await req.json();
        if(res.status == 'ok'){
            showAlert('Ebaa', 'Produto deletado com sucesso!', 'success');
            window.location.reload();
        }else{
            showAlert('Ops... Erro: '+res.statusCode, 'Message: '+ res.message, 'success');
        }
    })
})


function showAlert(title,message,icon){
    swal({
        title: title,
        text: message,
        icon: icon,
    });
}