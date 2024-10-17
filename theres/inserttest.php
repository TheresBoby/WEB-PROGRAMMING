<?php
$conn =mysqli_connect("localhost","root", "","theres_db");
if($conn){
    echo "Connected to database establishdd succesfully";
    $sql = "INSERT INTO test_table(testField) VALUES ('$_POST[textfield]')";
    $res = mysqli_query($conn, $sql);
    if($res)
    {
        echo  '<br/> Data inserted successfully';
    }else{
        die("Error: ".mysqli_error($conn));
    }


}
else{
    die("connection failed" .mysqli_connect_error());
} mysqli_close($conn);
?>