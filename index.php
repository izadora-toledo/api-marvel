<?php
require_once "api.php";
$personagens = Api::buscarHerois();
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
    <ul class="topnav">
        <li><a class="active" href="#marvel">MARVEL</a></li>
    </ul>     
    <div class="container">
        <div>
            <h3>CRIE SEU ÁLBUM DA MARVEL</h3>        
        </div>

        <form method="" action="actions.php" id="album-form">
            <div class="form-inline">
                <div class="col-md-4">
                    <label for="lista_personagens">LISTA DE HERÓIS</label>       
                    <select class="form-control" name="lista_personagens" id="lista_personagens">
                        <option value="0">-- SELECIONE --</option>
                        <?php
                            foreach ($personagens as $key => $personagem) {
                                $selected = (!empty($_POST['lista_personagens']) && $_POST['lista_personagens'] == $personagem) ? 'selected="selected"' : "";
                                echo '<option value="' .  $personagem['id'] . '">' . $personagem['name'] . '</option>'; 
                            }
                        ?>
                    </select>
                </div> 
            </div>            
        </form>
    </div>
</body>
</html>