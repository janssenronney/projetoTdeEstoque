const telaLogin = document.querySelector('.tela-login');
//const entrarLink = document.querySelector('.entrar-link');
//const registrarLink = document.querySelector('.registrar-link');
const botaoEntrar = document.querySelector('.botao');

//registrarLink.addEventListener("click", ()=> {
    //console.log(telaLogin);
//    telaLogin.classList.add("active");


//entrarLink.addEventListener("click", ()=> {    
//    telaLogin.classList.remove("active");
//});

botaoEntrar.addEventListener('click', ()=> {
    telaLogin.classList.add('active-popup');
});
