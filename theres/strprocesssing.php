<html>
    <head><title>str</title></head>

<body>

    <form method="POST"action="">
    <label>Enter a string:</label>
    <input type="text" name="inputstring" required>
    <label>Enter pattern:</label>
    <input type="text" name="pattern" required>
    <button type="submit"name="submit">search pattern </button>
</form>
<?php
if(isset($_POST['submit'])){
    $str=$_POST['inputstring'];
    $pattern =$_POST['pattern'];
    $pattern="/.$pattern./";
    if (preg_match($pattern,$str)){
        echo "pattern found";
    }
    else{
        echo"not found";
    }}
?>
</body>
</html>