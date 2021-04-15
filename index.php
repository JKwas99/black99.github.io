<?php
    session_start();
    if(isset($_SESSION['nick'])){
        header('location: strona.php');
        exit;
    }
    else{
        if(isset($_POST['nick']) && isset($_POST['pass'])){
            if($_POST['pass'] == "Trash"){
                $_SESSION['nick'] = $_POST['nick'];
                header('location: strona.php');
                exit;
            }
            if($_POST['pass'] !== "Trash"){
                echo "<h3>Podane Hasło jest błędne</h3>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="new.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&display=swap" rel="stylesheet">
    <title>Strona Logowania</title>
</head>
<body>
    <div class="main">
    <form action="index.php" method="post">
        <div class="block">
        <div class="static"></div>
        <div class="log">
            <label for="nick">Login :</label>
            <input type="text" name="nick" id="nick" autocomplete="off">
        </div>
        <div class="pas">
           <label for="pass">Password :</label>
            <input type="text" name="pass" id="pass" autocomplete="off"> 
        </div>
        <input type="submit" value="Zaloguj">
        </div>
    </form>
    </div>
</body>
</html>