<?php
$conn =mysqli_connect("localhost","root", "","theres_db");
if($conn){
    $sql ="UPDATE test_table SET testField ='i Love india' WHERE id = 4";
        if(mysqli_query($conn,$sql))
        {echo "updated";
        }
        else{
            echo("Error updating: ".mysqli_error($conn)); 
        }
$sql ="SELECT * FROM test_table";
$res =mysqli_query($conn,$sql);
if (mysqli_num_rows($res) > 0) {
    echo "<table border='border' width='300' ><tr><th>id</th><th width ='250'>my msg</th></tr>";
    while($row= mysqli_fetch_assoc($res)){
        echo " <tr><td>".$row["id"]."</td><td>".$row["testField"]."</td></tr>";
    }
    echo"</table>";
}else {echo "0 results";}
}else{
die("connectonn faileddd: ".mysqli_connect_error());
}
mysqli_close($conn);
?>
