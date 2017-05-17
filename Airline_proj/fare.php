<!DOCTYPE>
<html>
<script></script>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
th {
    height: 60px;
    width:170px;
}
table {
    border-collapse: collapse;
}
table, th, td {
    border: 2px solid 2px;
}
td {
    height: 30px;
    text-align: center;
}

tr:nth-child(even) {background-color: #f2f2d7}
tr:hover {background-color:#006699; color:white;}

th {
    background-color:  #2eb82e;
    color: white;
}
input[type=submit], input[type=reset],input[type=button] {
    background-color: #4CAF10;
    border: none;
    color: white;
    font : 20px;
    padding: 10px 28px;
    text-decoration: none;
    margin: 4px 2px;
    border-radius: 4px;
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
    
}
input[type=submit]:hover,input[type=reset]:hover , input[type=button]:hover{
    -webkit-transform: scale(1.05);
    transform: scale(1.05);
    cursor: pointer;
    text-decoration: underline;
    background-color: #4CAF10;
}


</style>

</head>
<body onload="visi()">


<input id="status" style="width:300px; height:40px; display:block;" type="button" value="Show List of Ticket Prices " onclick="func()"/>



<div id="resemp">
<center>
<?php


$con=mysqli_connect("localhost","root","","airline");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT fare_code , amount , f.flight_number , departure_airport_code , scheduled_departure_time , arrival_airport_code , scheduled_arrival_time from fare f INNER JOIN  flight_leg fl where f.flight_number = fl.flight_number");

echo "<table border='1'>
<tr >
<th>Fare code</th>
<th>Amount</th>
<th>Flight Number</th>
<th>Departure Airport Code</th>
<th>Departure Time</th>
<th>Arrival Airport Code</th>
<th>Arrival Time</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2]. "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[4] . "</td>";
  echo "<td>" . $row[5] . "</td>";
  echo "<td>" . $row[6] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);

//Output results
?>
</center>
</div>


<br><br>

<script type="text/javascript">
  var n = document.querySelector("#btn1");
  var s = document.querySelector("#resemp");
  var d = document.querySelector("#status");
  function visi(){
    s.style.visibility = "hidden";

  }
  function func(){
    s.style.visibility = "visible"; 
    d.style.visibility = "hidden"
  }

</script>
</body>
</html>
