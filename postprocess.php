<?php

include 'conn.php';


$pd1=$_GET['pd1'];
$pd2=$_GET['pd2'];
$pf=$_GET['pf'];

$by="sdreddy";
$entry=base64_encode(rand(0,99999999)).base64_encode(rand(0,99999999)).base64_encode(rand(0,99999999));
$sql = "INSERT INTO posts (posthead,postbody,files,bys,entry) VALUES ('$pd1', '$pd2', '$pf','test','$entry')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT * FROM posts WHERE entry='$entry'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
$pid=$row['postid'];

}}

$sql = "INSERT INTO views (postid,views) VALUES ('$pid','0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>