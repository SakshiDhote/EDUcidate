<?php

$servername="localhost";
$username="root";
$password="1712";
$database="educidate";

//Database
$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){

die("Connection Failed:" . mysqli_connect_error());

}
if(isset($_POST['submit'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username1=$_POST['username1'];
$date = $_POST['date'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$conpassword = $_POST['conpassword'];

$sql_query = "INSERT INTO tbsignup(firstname, lastname,username1, date, gender, email, number, password, conpassword)
VALUES('$firstname','$lastname','$username1','$date','$gender','$email','$number','$password','$conpassword')";

if(mysqli_query($conn,$sql_query)){
    echo "registration Successfully...";
}
else{
    echo "Error: "  , $sql_query , mysqli_error($conn);  
}
}
mysqli_close($conn);


?>