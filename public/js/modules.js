'use strict';

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

export {verifyData, loadMessage};