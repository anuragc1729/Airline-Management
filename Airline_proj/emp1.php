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
  echo "Connected to the database : .... airline";
  echo "<br>";
  echo "<br>";
  echo "<br>";echo "<br>";
}
 

// Escape user inputs for security

$ename = mysqli_real_escape_string($link, $_POST['empname']);

$gen = mysqli_real_escape_string($link, $_POST['gen']);

$dob = mysqli_real_escape_string($link, $_POST['dob']);
 
$fid = mysqli_real_escape_string($link, $_POST['fid']);

$eid = mysqli_real_escape_string($link, $_POST['eid']);

// attempt insert query execution

$sql = "INSERT INTO Employee(e_id , name , sex , dob , flight_id) VALUES ('$eid' ,'$ename','$gen', '$dob', '$fid')";

if(mysqli_query($link, $sql)){

    echo "Your query been submitted successfully";

} else{

    echo "ERROR: Could not INSERT into the table successfully . PLease try again" . mysqli_error($link);

}

// close connection

mysqli_close($link);

?>

<br><br>
</body>
</html>
