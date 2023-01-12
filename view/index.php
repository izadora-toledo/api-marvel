<?php
require_once "../view/conexao.php";
require_once "../class/api.php";


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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Personagens e histórias da Marvel</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h1 class="title">MARVEL</h1>     
    <div class="container">        
        <h3>Leia sobre os heróis da Marvel</h3>

        <form method="POST" action="stories.php" class="form_heroes">
             <div class="form-inline">
                <div class="col-md-12">
                    <label class="list-chracteres-label" for="lista_personagens">Selecione um herói</label>       
                    <select class="select-heroes" name="lista_personagens" id="lista_personagens">
                        <option value="0" class="option">-- Lista de heróis --</option>
                        <?php                            
                            $lsql = "SELECT * FROM heroi WHERE id IN (2,4,6,7,8,10,14,15)";
                            $lista = $conexao->query($lsql);        
                            
                            while ($listaHerois = mysqli_fetch_array($lista)) {                               
                                $selected = (!empty($_POST['lista_personagens']) && $_POST['lista_personagens'] == $listaHerois['nome']) ? 'selected="selected"' : "";                      
                                echo '<option ' . $selected . ' value="' .  $listaHerois['id'] . '">' . $listaHerois['nome'] . '</option>'; ?>                         
                        <?php } ?>               
                    </select> 
                    <div class="card-heroe" id="div_card" style="width: 25rem;" >
                        <img class="image-heroe" id="imagem" alt="Card image heroe" src="" >
                        <div class="card-body">
                            <h4 for="descricao_heroi" class="description-heroe-title" id="descricao_heroi"></h4>
                            <p type="text" class="description-heroe" id="descricao_heroi" ></p>
                            <button type="submit" class="button-heroe btn-dark" id="buscar_historias">Histórias</button>                        
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