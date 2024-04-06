var botaoMenu = document.querySelector('.menu')
var paginas = document.querySelector('.lista')


botaoMenu.addEventListener('click', ()=>{
    paginas.classList.toggle('lista')
})