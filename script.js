$(document).ready(function() { 
    $('#div_card').hide();
    $('#lista_personagens').change(function() {           
        var param = {'acao': 'buscarHerois', 'id_heroi': $('#lista_personagens').val()};      
        $.ajax({
            type: 'POST', 
            dataType: 'json', 
            url: 'http://localhost/api-marvel/actions.php', 
            async: true,       
            data: param                  
        }).done(function(result){           
            $('#div_card').show();
            if(result.descricao != ''){
                $('#descricao_heroi').html(result.descricao); 
            } else {
                $('#descricao_heroi').html('Esse herói mão tem descrição.');
            }
            $("#titulo_heroi").html(result.nome);   
            $("#imagem").attr("src", result.imagem);
            $("#lista_personagens").attr("required", "req"); 
        });
        return false;  
    });    
});

