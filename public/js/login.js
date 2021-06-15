//Checkbox
const MAIN_URL=document.querySelector('img').src.split('img/')[0];
const checkbox = document.querySelector('.row #check');
checkbox.addEventListener('click',(evt)=>{
    evt.target.classList.toggle('active');
    let arr = evt.target.getAttribute('class').split(' ');
    if(arr.includes('active')){
        document.querySelector('.row #terms').setAttribute('checked', 'true');
    }else{
        document.querySelector('.row #terms').removeAttribute('checked');
    }
})
//End checkbox

//Login
const form = document.querySelector('main form');
const inputs = document.querySelectorAll('main form input');
inputs.forEach(val=>{
    val.addEventListener('change',({target})=>{
        let id = target.id;
        let divMessage = id==='terms'?target.parentNode.parentNode.querySelector('.div_message'):target.parentNode.querySelector('.div_message');
        let Pmessage = divMessage.querySelector('p');
        if(id === 'terms'){
            if(checkTerms(target)){
                divMessage.classList.remove('error');
                divMessage.classList.add('success');
                Pmessage.innerHTML = 'É Bom que tenha lido mesmo viu'
            }
            else{
                divMessage.classList.remove('success');
                divMessage.classList.add('error');
                Pmessage.innerHTML = 'Você leu os termos? Discorda de algo?'
            }
        }else{
            if(verifyData(target.value))
            {
                loadMessage(divMessage,Pmessage,'Preenchido corretamente!','success')
                 if(id === 'email')
                 {
                    if(verifyEmail(target.value)){
                        loadMessage(divMessage,Pmessage,'E-mail bem profissional este!','success')
                    }else{
                        loadMessage(divMessage,Pmessage,'Um E-mail de verdade é assim?')
                    }
                 }

                 if(id === 'password')
                 {
                    if(verifyPassword(target.value)){
                        loadMessage(divMessage,Pmessage,'Me parece bem segura essa senha!','success')
                    }else{
                        loadMessage(divMessage,Pmessage,'A senha tem que ser maior que 8 caracteres!')
                    }
                 }

            }else{
                loadMessage(divMessage,Pmessage,'Este campo nao pode ficar vazio...')
            }
        }
    })
})
form.addEventListener('submit',async(evt)=>{
    evt.preventDefault();
    if(verifyAll({
        name: inputs[0].value,
        email: inputs[1].value,
        password: inputs[2].value,
        terms: inputs[3],
    })){
       let request = await fetch(MAIN_URL+'admin/login',
       {
            cache: 'default',
            headers: {"Content-Type":'application/json'},
            method: 'POST',
            mode: 'cors',
            body: JSON.stringify({
                name: inputs[0].value,
                email: inputs[1].value,
                password: inputs[2].value,
            })
        });
        let response = await request.json();
        console.log(response);
        if(response.status === 'ok'){
            window.location.reload();
        }else{
            alert('E-mail e/ou senha incorreto(s)');
        }
    }else{
        alert("Corriga os erros que estão aparecendo na tela bro!")
    }
})

function checkTerms(terms)
{
    return terms.getAttribute('checked')?true:false;
}
function verifyData(data)
{
    if(data !== '' &&
        data !== null &&
        data !== undefined &&
        data.length !== 0)
    {
        return true;
    }else return false;
}
function verifyEmail(email)
{
    let re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return email.match(re)?true:false; 
}
function verifyPassword(password)
{
    return password.length >= 8?true:false;
}
function verifyAll({terms,password,email,name})
{
    if(checkTerms(terms) &&
     verifyData(password) &&
     verifyData(name) &&
     verifyData(email) &&
     verifyEmail(email) &&
     verifyPassword(password)
      ){
        return true;
    }else return false;
}
function loadMessage(div,p,message,type='error')
{
    if(type=='error'){
        div.classList.add('error');
        div.classList.remove('success');
        p.innerHTML = message;
    }else{
        div.classList.add('success');
        div.classList.remove('error');
        p.innerHTML = message;
    }
}

// END LOGIN