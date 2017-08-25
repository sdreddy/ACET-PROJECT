<?php
include 'conn.php';
$un=$_GET['pd1s'];
$pw=$_GET['pd2s'];

$sql = "SELECT * FROM userlog WHERE username='$un' AND password='$pw'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

$sun=$row['username'];

$spass=$row['password'];

}}
else{
$sun="";
$spass="";

}


if($sun==$un && $spass==$pw){

echo("Login Successful");

$tm=time();
$ssid=$_COOKIE['PHPSESSID'];

$tm=time();
$bw=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];

$sql = "INSERT INTO sesslog (sessid,time,browser,ip,userid) VALUES ('$ssid','$tm','$bw','$ip','$sun')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

else
{
echo("Login Failed");

}

?>