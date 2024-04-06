$('#form1').submit(function(e){
    e.preventDefault();

    var nome = $('#nome').val();
    var apelido = $('#apelido').val();
    var escalao = $('#escalao').val();
    var endereco = $('#endereco').val();
    var contacto = $('#contacto').val();

    $.ajax({
        url: 'http://localhost/nacaj_cadastro/sistema_cadastro_lideres/php/inserir.php',
        method: 'POST',
        data: {nome: nome, apelido: apelido, escalao: escalao, endereco: endereco, contacto: contacto},
        dataType: 'json'
    }).done(function(result){
        $('#nome').val('');
        $('#apelido').val('');
        $('#escalao').val('');
        $('#endereco').val('');
        $('#contacto').val('');

        console.log(result);

    })
})

function getData(){
    $.ajax({
        url: 'http://localhost/nacaj_cadastro/sistema_cadastro_lideres/php/selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        console.log(result);
        for (var i = 0; i < result.length; i++){
            $('.caixa').prepend('<a href=""<div><p>' + result[i].nome + ' ' + result[i].apelido + '</p></div><div><p>' + result[i].endereco + '</p></div>');
        }
    })

}

getData();