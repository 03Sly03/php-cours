<?php
// $_GET est une variable super-global
// les parmétres get : ?email...

if($_POST) {
    echo '<pre>';
    var_dump($_POST);
    echo '<pre>';

    echo $_POST['email'];
    echo '<br>';
    echo $_POST['password'];
    echo '<br>';
}

?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form get</title>
</head>
<body>
<form action="" method="post">
        <div>
            <input type="text" name="email" id=""/>
        </div>
        <div>
            <input type="password" name="password" id="">
        </div>
        <div>
            <button type="submit">ok</button>
        </div>
    </form>
</body>
</html>