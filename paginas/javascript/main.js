var campos_search = document.querySelector('.pesquisa form .campos');

var botao_search = document.querySelector('.lupa');

botao_search.addEventListener('click', function(){
    campos_search.classList.toggle('active');
})