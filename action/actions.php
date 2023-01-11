<?php
    require_once '../class/api.php';
    require_once "../view/conexao.php";

    switch (!empty($_REQUEST['acao'])) {      
        case 'buscarHerois':
            
            $herois = "SELECT * FROM heroi WHERE id = " . $_POST['id_heroi']; 
            $queryHerois = $conexao->query($herois);         
            while ($return = mysqli_fetch_assoc($queryHerois)) {
                echo json_encode($return);          
            }       
        break;
    }
?>
