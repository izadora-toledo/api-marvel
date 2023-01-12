<?php 
require_once "../view/conexao.php";

$historias = "SELECT * FROM stories WHERE id_heroi = " . $_POST['lista_personagens']; 
$stories = $conexao->query($historias);

$herois = "SELECT * FROM heroi WHERE id = " . $_POST['lista_personagens']; 
$heros = $conexao->query($herois);
$return_heroi = mysqli_fetch_array($heros);
?>
<head>
    <link rel="stylesheet" href="style.css">   
    <title>Histórias do <?php echo $return_heroi['nome'] ?></title>
</head>
<body>
    <nav class="menu">
        <a class="title-brand" href="#marvel">MARVEL</a>       
    </nav>
    <a class="button-back" href="index.php">Voltar para home</a>
    <div class="card-history-heroe">
        <h1 class="title-history-heroe"><?php echo !empty($return_heroi['nome']) ? 'Histórias do herói ' . $return_heroi['nome'] : 'Você não selecionou nenhum herói!' ?></h1>
        <?php                         
            while ($return_storie = mysqli_fetch_array($stories)) { ?>
            <h4 for="descricao_historia" class="title-description-history"><?php echo !empty($return_storie['descricao']) ? $return_storie['titulo_storie'] : '' ?></h4>
            <p type="text" class="card-text-history"><?php echo !empty($return_storie['descricao']) ? $return_storie['descricao'] : '' ?></p>                            
        <?php } ?>                        
    </div>      
</body>
</html>