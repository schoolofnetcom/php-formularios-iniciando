<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_VALIDATE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    var_dump($nome);
    var_dump($idade);

    $data = filter_input_array(INPUT_POST, FILTER_VALIDATE_EMAIL);
    var_dump($data);

    exit;
}

/**
 * < => &lt
 * > => &gt
 * " => &quote
 * ' => &#039
 * & => &amp
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="email[]">
        <input type="text" name="email[]">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
