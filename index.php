<?php
require_once "conexao.php";
require_once "api.php";
global $conexao;

$sql = "SELECT * FROM heroi";
$herois = $conexao->query($sql);
if (empty($inserir->num_rows)) {
    $inserirHerois = Insert::inserir();
}

$sql = "SELECT * FROM stories";
$stories = $conexao->query($sql);
if (empty($stories->num_rows)) {
    $inserirStories = Insert::stories();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head></head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Personagens e histórias da Marvel</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <ul class="topnav">
        <li><a class="active" href="#marvel">MARVEL</a></li>
    </ul>     
    <div class="container">
        <div>
            <h3>LEIA SOBRE OS HERÓIS DA MARVEL</h3>        
        </div>

        <form method="POST" action="stories.php" id="form_herois">
            <div class="form-inline">
                <div class="col-md-4">
                    <label class="lista_personagens" for="lista_personagens">SELECIONE UM HERÓI</label>       
                    <select class="form-control" name="lista_personagens" id="lista_personagens">
                        <option value="0">-- SELECIONE --</option>
                        <?php                            
                            $lsql = "SELECT * FROM heroi WHERE id IN (2,4,6,7,8,10,15)";
                            $lista = $conexao->query($lsql);        
                            
                            while ($listaHerois = mysqli_fetch_array($lista)) {                               
                                $selected = (!empty($_POST['lista_personagens']) && $_POST['lista_personagens'] == $listaHerois['nome']) ? 'selected="selected"' : "";                      
                                echo '<option ' . $selected . ' value="' .  $listaHerois['id'] . '">' . $listaHerois['nome'] . '</option>';?>                         
                        <?php } ?>               
                    </select> 
                    <div class="card" id="div_card" style="width: 25rem;">
                        <img class="card-img-top" id="imagem" alt="Card image cap">
                        <div class="card-body">
                            <h4 for="descricao_heroi" id="titulo_heroi"></h4>
                            <p type="text" class="card-text" id="descricao_heroi"></p>
                            <button type="submit" class="form-control btn-dark" id="buscar_historias">Conheça suas histórias</button>                        
                        </div>
                    </div>                  
                </div>               
            </div>
            <br>
        </form>
    </div> 	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>    
    <script type="text/javascript" src="script.js"></script> 
</body>
</html>