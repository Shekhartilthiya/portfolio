<?php

$servername="localhost";
$username="root";
$password="";
$dbname="text";

// connection
$conn=new mysqli($servername,$username,$password,$dbname);

// check connection make or not 
if($conn->connect_error){
    die("connection fail");
}
$fname=$_post['fname'];
$zname=$_post['lname'];
$email=$_post['email'];
$number=$_post['number'];

//sending data this to data base
$sql="INSERT INTO `contectdata` (`sr`,`fnaem`,`lname`)VALUES(NULL,`$fnaem`,`$zname`,`$email`,`$number`);";

//query work 
if($conn->query($sql)==true){
    echo "new record added";

}
else{
    echo "error not submit";
}
//close connection
$conn->close();

?>