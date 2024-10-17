<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_POST['cancel'])){
    header("locaton: test.php");

}
$failure =false;

if (isset($_POST['submit']))
{
    if ( strlen($_POST['who']) < 1 || strlen($_POST['pass']) < 1){
        $failure=" username and password required";

    }
    else{
        $check == $_POST['pass'];
        $pwd="admin";
        if($check == $pwd){
            header("location:hello.php");
            return;
        }
        else{
            $failure="incorrect password";
        }

    }
}


if (isset($_POST['cancel'])){
    header(header: 'location:hello.php');
    exit();
}
?>


    <form method = "GET">
    <label>Username:</label>
    <input type="text" name="who" id="nam">
    <label>Password</label>
    <input type="password" name="pass" id= "id123">
    <button type="submit" name="submit">submit</button>
    <button type="submit" name="cancel">cancel</button>
</body>
</html>