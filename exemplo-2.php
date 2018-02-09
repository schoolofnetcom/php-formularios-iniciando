<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    var_dump($_POST);
    var_dump($_FILES);
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
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="nome">
        <input type="email" name="email">
        <input type="color" name="color">
        <input type="date" name="date">
        <input type="datetime" name="datetime">
        <input type="file" name="file">
        <input type="number" name="number">

        <br>

        <input type="radio" name="radio" value="valor 1">
        <input type="radio" name="radio" value="valor 2">
        <input type="radio" name="radio" value="valor 3">

        <br>

        <input type="checkbox" name="checkbox" value="checked">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
