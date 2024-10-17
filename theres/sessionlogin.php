<html><body>
<?php
if (isset($errorMessage)){
    echo"<p style= 'color: red;'> $errorMessage</p>";
}
?>
enter username and password<br/>
    <form method = "GET">
    <label>Username:</label>
    <input type="text" name="who" id="nam">
    <label>Password</label>
    <input type="password" name="pass" id= "id123">
    <button type="submit" name="submit">login</button>
    <button type="submit" name="cancel">cancel</button>
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])){
    if(($_POST['who']!="")||($_POST['pass']!="")){
        $name =$_POST['who'];
        $password= $_POST['pass'];
        if ($name =="admin"&& $password == "admin123"){
            $_SESSION["uname"]= $name;
            header("location:hello.php");
            exit();
        }
        else {$errorMessage =" incorrect credentials";}
    }else{
        $errorMessage =" enter username and password";
    }
}
?>