<!DOCTYPE html>
<html>
<head>
<style>
.form{ background-color:white;
    border-color:black;
    border-width:2px;
    border-style:solid;
    padding:40px;
     margin:15px;
     text-align:center;
     width:300px;
     height:200px;
     position:absolute;
     top:200px;
     left:480px;
     font-style:italic;
     border-radius:30px;
     font-size:20px;
     }
body{background-image:url("q7.jpg");
    background-size:cover;
     background-repeat:no-repeat;}
.dropbtn {
    background-color:#00ccff;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    font-style:italic;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
   color:#248f24;
    min-width: 160px;
    font-style:italic;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color:#00ccff;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #00ccff;
}

</style>
<head>
<body>
<a href="fp.html">
  <img src="q6.jpg" alt="QATAR AIRWAYS" style="width:42px;height:42px;border:0;">
</a>
<div class="form">
<form  name="flight" action="flight.php" method="POST" id="fli_id">
<h3>Flight</h3>
Flight_id:<input type="textbox" maxlength="15" name="Flight_id" placeholder="Username"><br/><br/>
Working_day:<input type="textbox" maxlength="15" name="Working_day" placeholder="day"><br/><br/>
<input type="Submit" value="Submit" style="font-style:italic;height:30px;width:100px" ><br/><br/>
</div>
</form>
<script>
ar s = document.getElementById("feed")
s.onsubmit = sub;
function sub()
    {
        var a = confirm("Would you like to Submit the form ?")
        return a;
    }

function res()
    {
        var a = confirm("Would you like to Reset the form ?")
        return a;
    }
</script>



<?php
$con=mysqli_connect("localhost","root","","airline");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// escape variables for security
$flight = mysqli_real_escape_string($con, $_POST['Flight_id']);
$day = mysqli_real_escape_string($con, $_POST['Working_day']);


$sql="INSERT INTO flight (flight_number,working_days)
VALUES ('$flight', '$day')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>





<p></p>

<br><br>

<p>Click on the link provided to be redirected to the <a href="flight.html">flight page</a></p>

</body>
</html>
