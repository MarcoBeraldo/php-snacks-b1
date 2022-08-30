<?php

$access = false;

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

$can_login = (mb_strlen($name) > 3) && (strpos($mail, '@')) && (strpos($mail, '.')) && (is_numeric($age));

if($can_login){
    $access = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if($access) :?>
        <p>Accesso riuscito</p>
    <?php elseif (!$access) :?>
        <p>Accesso negato</p>
    <?php endif; ?>
</body>
</html>