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
if(isset($_POST['login']))
{

    $username1 = $_POST['username1'];

    $password = $_POST['password'];

   

    $sql_query = "SELECT username1, password FROM tbsignup where username1 = '".$username1."' and password = '".$password ."'" ;

    $_result=mysqli_query($conn,$sql_query);
if(mysqli_num_rows($_result)>0){
    while($row=mysqli_fetch_assoc($_result))
    {
        header("Location:index.html");
      
    }
    
}
else{
    echo("invalid data !");

}

}
mysqli_close($conn);
?>