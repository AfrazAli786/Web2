<?php
$servername = "localhost:3307";
$username = "root";
$password = "";


// Connection 
$conn = new mysqli($servername, $username, $password,"website1st");

// For checking if connection is
// successful or not
if ($conn->connect_error) {
die("Connection failed: "
	. $conn->connect_error);
}
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

     $insertQuery="INSERT INTO users(name,email,password)
                    VALUES ('$name','$email','$password')";
         if($conn->query($insertQuery)==TRUE){
             header("location: AsliIndex.html");
         }
         else{
             echo "Error:".$conn->error;
         }
  }
?>

