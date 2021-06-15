let btnMobile = document.querySelector('#btn-mobile');
let toggleMenu = function(event){ 
    if(event.type == 'touchstart') event.preventDefault();
    document.querySelector('#nav').
    classList.toggle('active');/*para todas as classe da nav, toggle adiciona caso não tenha e tira caso tenha*/
}
btnMobile.addEventListener('click', toggleMenu);
btnMobile.addEventListener('touchstart', toggleMenu);/*para dar menos dalay no mobile*/