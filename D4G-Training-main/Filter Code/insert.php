<?php
	$con = new mysqli("localhost", "root", "","d4g");

	if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}




// $name = $_POST["Name"];
// $Email=$_POST["mail"];
// $Sub =$_POST["subject"];
// $mes=$_POST["message"];

// $sql = "INSERT INTO krishna (Name,mail,subject,message)
// VALUES ('$name','$Email','$Sub','$mes')";

// if(!mysqli_query($conn,$sql))
//     echo "NOT INSERTED";
// else
//   echo "INSERTED";

// header("refresh:2; url=Index.html");



?>