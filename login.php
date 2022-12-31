<?php




$userid=$_POST['userid'];
$usrpsw=$_POST['usrpsw'];



$con=new mysqli('localhost','root','','hospital');
if($con-> connect_error)
{
    die('connection failed:' .$con->connect_error);
} 
    else{
         
        $stmt=$con->prepare("insert into login (email,password) values ('$userid','$usrpsw')");
        
        $stmt->execute();
        echo "Login  Sucessfull...";
        $stmt->close();
        $con->close();
        
    }

?> 