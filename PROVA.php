<?php
// QUESTÃO 01 
$matematicos = [
    'Pitagoras' => 
    [
        'Idade' => 80,
        'Pais' => 'Grécia' 
    ],
    'Gauss' => 
    [
        'Idade' => 77,
        'Pais' => 'Alemanha' 
    ],
    'Galileu' => 
    [
        'Idade' => 77,
        'Pais' => 'Itália'
    ]
    ];

/* RESPOSTA QUESTÃO 01 */
foreach ($matematicos as $key => $value) {    
    echo "O filosófo se chama " . $key . ", tem " . $value['Idade'] . " anos e mora na " . $value['Pais'] . ".<br>";
}
// QUESTÃO 02 - RESPOSTA CORRETA É A LETRA -> C - self::staticMethod();
?>

<script>
    // QUESTÃO 03 - RESPOSTA CORRETA É A LETRA -> A
    var idade;
    if (idade >= 18 && peso > 50) {
        console.log('Você pode doar sangue!');
    } else {
        console.log('Você não pode doar sangue!');
    }   
</script>

<!-- QUESTÃO 04 - RESPOSTA CORRETA É A -> C - Se utilizar o PHP dentro de um HTML é necessário fechar a tag; --> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prova</title>
    </head>
    <body>
        <?php
            $time = 'Sistemas-Internos';
            $area = 'Dev ';

            $cargo = 'Assistente';

            echo "Somos do time " . $area . $time . ' e estamos procurando um ' . $cargo;
        ?>
    </body>
</html>

<!-- QUESTÃO 05 - RESPOSTA CORRETA É A LETRA -> C - I,II, e III;

<?php 
// QUESTÃO 06 - RESPOSTA CORRETA É LETRA -> D - 5;
// QUESTÃO 07 - RESPOSTA CORRETA É LETRA C -> SELECT Nome FROM Pessoas WHERE Idade > 20 AND Idade < 40;
// QUESTÃO 08 - RESPOSTA CORRETA É LETRA A 
// QUESTÃ0 09 - RESPOSTA CORRETA É LETRA A - Apenas I
// QUESTÃO 10 - RESPOSTA CORRETA É LETRA A - cd, mv, mkdir, ls, traceroute
?>

    


