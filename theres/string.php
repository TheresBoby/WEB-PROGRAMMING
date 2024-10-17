<html>
    <head><title>prime od not</title></head>

<body>

    <form method="POST"action="">
    <label>Enter a string:</label>
    <input type="text" name="inputstring" required>
    <button type="submit"name="submit">count</button>
</form>

</body>
</html>
<?php

if(isset($_POST['submit']))
{
    $inputstring=$_POST['inputstring'];
    $wordcount= str_word_count($inputstring);
    echo "$wordcount";
}
?>