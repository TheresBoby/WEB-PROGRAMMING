<html>
    <head><title>prime od not</title></head>

<body>

    <form method="POST"action="">
    <label>Enter a number:</label>
    <input type="number" name="num" required>
    <button type="submit"name="submit">check</button>
</form>

</body>
</html>
<?php
function isPrime($value){
    $FLAG=0;
    for($i=2;$i<=($value/2);$i++){
        if($value%$i==0){
            $FLAG=1;
        }
    }
    if($FLAG==0){
        return true;
    }
    else{
        return false;
    }
}

if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    if (isPrime($num))
    {
        echo"prime";
    }
    else{
        echo"not prime";
    }
}
?>
