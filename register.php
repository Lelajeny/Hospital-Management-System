<?php


$fname=$_POST['fname'];
$lname=$_POST['lname'];

$email=$_POST['email'];
$pwd=$_POST['pwd'];
$conpwd=$_POST['conpwd'];


$con=new mysqli('localhost','root','','hospital');
if($con-> connect_error)
{
    die('connection failed:' .$con->connect_error);
} 
    else{
         
        $stmt=$con->prepare("insert into register (fname,lname,email,password,conpassword) values ('$fname','$lname','$email','$pwd','$conpwd')");
        
        $stmt->execute();
        echo "Registration  Sucessfull...";
        $stmt->close();
        $con->close();
        
    }
?> 