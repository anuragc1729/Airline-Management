<!DOCTYPE html>
<html>
<body>
<form action="res.php" method="POST" >
Enter the passenger id to be deleted::<input type="textbox" name="p_id" >
<input type="Submit" value="Submit" style="font-style:italic;height:30px;width:100px" ><br/><br/>

</form>
 <?php

    /* Attempt MySQL server connection. */
$conn =mysqli_connect("localhost","root","","airline");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$pid = $_POST['p_id'];
// sql to delete a record
$sql = "DELETE FROM passenger where p_id = $pid";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>

</body>
</html>
