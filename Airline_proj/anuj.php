

<!DOCTYPE html>  
<html> 
<title></title>
<head>
</head>  

<body>
<?php

    /* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "airline" );
// Check connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else{
	echo "connected";
	echo "<br>";
	echo "<br>";
	}
 

// Escape user inputs for security

$pcompany = mysqli_real_escape_string($link, $_POST['company']);
$ptype = mysqli_real_escape_string($link, $_POST['type']);
$pseats = mysqli_real_escape_string($link, $_POST['seats']);
$pfuel = mysqli_real_escape_string($link, $_POST['fuel']);

 
echo "$pcompany";
echo "$ptype";
// attempt insert query execution

$sql = "INSERT INTO plane_type(company,airplane_type,max_seats,fuel_type) VALUES ('$pcompany','$ptype','$pseats','$pfuel')";
if(mysqli_query($link, $sql)){

    echo "Succesfully added";
	echo "<br>";
	echo "<br>";
} else{

    echo "ERROR" . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>




<p></p>

<br><br>

<!--<p>Click on the link provided to be redirected to the <a href="home.html">Home page</a> <br>Or the <a href="feedback.html">Feedback page</a> , if you wish to submit another feedback to us</p>
-->
</body>
</html>
