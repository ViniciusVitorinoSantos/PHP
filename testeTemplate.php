<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="author" content="Vinícius Vitorino"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css" type="text/css">
    <title>Aula 04 PHP</title>
</head>

<body>

<div>

    <?php

    $nome = "Jaqueline ";
    $idade = 22;
    echo "<h2>$nome tem $idade anos</h2> ";

    const ANIMAIS = array('cachorro', 'gato', 'passaro');
    foreach (ANIMAIS as $animal){
        echo $animal.' ';
    }


    ?>

</div>

</body>

</html>