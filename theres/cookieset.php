<?php
if(isset($_POST['submit'])) {

    define("fivedays",60*60*24*5);
    setcookie("name",$_POST["name"], time() + fivedays);
    setcookie("height",$_POST["height"], time() + fivedays);
    $name+$_COOKIE["name"];
    $height=$_COOKIE["height"];
    echo"cookies set";
}

if (isset($_POST['cancel'])){
    exit();
}
?>
<html>
    <head></head>
    <body>
    <form method = "GET">
    <label>name:</label>
    <input type="text" name="who" id="nam">
    <label>height</label>
    <input type="text" name="height">
    <button type="submit" name="submit">write cookie</button>
    <button type="submit" name="cancel">cancel</button>
    </body>
</html>