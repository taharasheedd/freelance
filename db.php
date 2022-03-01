<?php
$error = '';
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "iuworks";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['login'])){

$sql = "SELECT * FROM user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."' ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $_SESSION["user"] = $_POST['email'];
        $_SESSION["type"] = $row['type'];
    }
  
    
  
  
  
} else {
    $error = '1';
}
$conn->close(); 
}



if(isset($_POST['regoster'])){
    
$sql = "INSERT INTO `user`(`fullname`, `email`, `password` , `type`) VALUES ( '" . $_POST['fullname'] . "' , '" . $_POST['email'] . "' , '" . $_POST['password'] . "'  , '" . $_POST['select'] . "' )";
$result = $conn->query($sql);

$conn->close(); 
header("Location: http://localhost/project/");

    
}
