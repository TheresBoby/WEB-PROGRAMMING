<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_update.php" method ="post">
        <p><label>Enter the id to Update</label><br/>
        <?php
        $conn =mysqli_connect("localhost","root", "","theres_db");
        if($conn){
            $sql ="SELECT * FROM test_table";
            $res= mysqli_query($conn,$sql);
            if (mysqli_num_rows($res) > 0) {
                echo '<select name ="selectedId">';
                while($row= mysqli_fetch_assoc($res)){
                    $id =$row['id'];
                    echo '<option value="'.$id.'">'.$id .'</option>';}
                echo "</select>";
                }
            }else{
            die("connectonn faileddd: ".mysqli_connect_error());
            } 
        ?>




        <label> enter text to update</label><br/>
        <input type ="text" name ="testfield" size="30"/><br/>
        <input type= "submit" name="submit" value= "update record"/>

</form>

</body>
</html>


