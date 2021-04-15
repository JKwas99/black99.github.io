<?php
    session_start();
    if(isset($_SESSION['nick'])){
        unset($_SESSION['nick']);  
    }
    else{
        header('location: index.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="newtt.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <title>Wylogowywanie</title>
</head>
<body>
    <h1 class="mainTitle">Zostałeś Wylogowany</h1>
    <a href="index.php">Strona Główna</a>
</body>
</html>