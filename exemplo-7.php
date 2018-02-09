<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    extract($_POST);

    var_dump($nome, $idade);

    $data = compact('nome', 'idade', '_POST');

    var_dump($data);
    exit;
}

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
        <input type="text" name="nome">
        <input type="text" name="idade">
        <input type="submit" value="enviar">
    </form>

</body>
</html>
