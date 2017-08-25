<?php

include 'conn.php';


$pd1=$_GET['postid'];
$pd2=$_GET['cm'];
$pd3=$_GET['cm2'];


$sql = "INSERT INTO comments(comment,bys,postid) VALUES ('$pd3', '$pd2', '$pd1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



?>