
let sucheForm = document.querySelector('.sucheForm');
document.querySelector('#search-btn').onclick =() =>{
    sucheForm.classList.toggle('active');
    cart.classList.remove('active');
    log.classList.remove('active');
}
let cart = document.querySelector('.shoppingCart');
document.querySelector('#card-btn').onclick =() =>{
    cart.classList.toggle('active');
    sucheForm.classList.remove('active');
    log.classList.remove('active');
}
let log = document.querySelector('.loginForm');
document.querySelector('#login-btn').onclick =() =>{
    log.classList.toggle('active');
    sucheForm.classList.remove('active');
    cart.classList.remove('active');
}
let navBar = document.querySelector('.navBar');
document.querySelector('#menu-btn').onclick =() =>{
    navBar.classList.toggle('active');
    sucheForm.classList.remove('active');
    log.classList.remove('active');
    cart.classList.remove('active');
    log.classList.remove('active');
}