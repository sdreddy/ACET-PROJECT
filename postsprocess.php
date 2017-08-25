<?php

include 'conn.php';


$pd1=$_GET['pd1'];
$pd2=$_GET['pd2'];
$pf=$_GET['pf'];
$by="sdreddy";

$sql = "INSERT INTO posts (posthead,postbody,files,by) VALUES ('$pd1', '$pd2', '$pf','$by')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>