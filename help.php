<?php
$Firstname=$_POST['Firstname'];
$Lastname=$_POST['Lastname'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$Repeat_Password=$_POST['Repeat_Password'];
$Gender=$_POST['Gender'];

$conn = new mysqli('localhost','root','','loginform');
if ($conn->connect_error) {
    die('connection failed'. $conn->connect_error);     
} 
else{
    $stmt= $conn->prepare("insert into register (Firstname, Lastname, Email, Password, Repeat_Password, Gender) values(?,?,?,?,?,?)");
    $stmt->bind_param('ssssss',$Firstname, $Lastname, $Email, $Password, $Repeat_Password, $Gender);
    $stmt->execute();
    echo'<script type="text/javascript" >
    alert("registration successfully...");
    window.location.href= "http://localhost/nirbhay/bootstrapprj/Signin.html"
    </script>';
    $stmt->close();
    $conn->close();
}
?>