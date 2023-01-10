<?php 
require_once "conexao.php";

$historias = "SELECT * FROM stories WHERE id_heroi = " . $_POST['lista_personagens']; 
$stories = $conexao->query($historias);

$herois = "SELECT * FROM heroi WHERE id = " . $_POST['lista_personagens']; 
$heros = $conexao->query($herois);
$return_heroi = mysqli_fetch_array($heros);
?>
<head>
    <link rel="stylesheet" href="style.css">   
    <title>Document</title>
</head>
<body>
    <div class="logo">
        <ul class="topnav">
            <li><a class="active" href="#marvel">MARVEL</a></li>
            <li class="home"><a class="home" href="index.php">Clique aqui para voltar pro menu de heróis.</a></li>
        </ul> 
    </div>
   
    <div class="container">
        <div class="col-md-4" id="div_card_stories">
            <div class="card" style="width: 25rem;">           
                <div class="card-body">
                    <h1><?php echo !empty($return_heroi['nome']) ? 'Histórias do herói ' . $return_heroi['nome'] : 'Você não selecionou nenhum herói!' ?></h1>
                    <?php                         
                        while ($return_storie = mysqli_fetch_array($stories)) {?>
                        <h4 for="descricao_historia" id="titulo_historia"><?php echo !empty($return_storie['descricao']) ? $return_storie['titulo_storie'] : '' ?></h4>
                        <p type="text" class="card-text" id="descricao_historia"><?php echo !empty($return_storie['descricao']) ? $return_storie['descricao'] : '' ?></p>                            
                    <?php } ?>                        
                </div>
            </div>
        </div>
    </div>
</body>
</html>