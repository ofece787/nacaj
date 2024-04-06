var botao = document.querySelector('.menu')
var botao1 = document.querySelector('.menu1')
var opcoes = document.querySelector('.opcoes')
//var principal = document.querySelector('main')
var corpo = document.querySelector('body')
const view = new IntersectionObserver((entries) => {
    console.log(entries)
})
view.observe(botao1)

botao.addEventListener('click', show)
botao1.addEventListener('click', hide)
//principal.addEventListener('click', hide)
corpo.addEventListener('scroll', hide)

function show() {   
    opcoes.style.height = '175px'
    botao.style.display = 'none';
    botao1.style.display = 'flex'   
}
function hide() { 
    opcoes.style.height = '60px'
    botao1.style.display = 'none'; 
    botao.style.display = 'flex'  
}