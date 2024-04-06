var botao = document.querySelector('.botao');

$('.botao').on('click', function(){
    $('.form').fadeIn('slow')
    var form = document.querySelector('.form');
    form.style.display = 'flex';

})

$('.fechar').on('click', function(){
    $('.form').fadeOut('slow');
    ('.botao').fadeIn('slow');
})
