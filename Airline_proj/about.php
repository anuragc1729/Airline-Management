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

tr:nth-child(even) {background-color: #f2f2f2}
tr:hover {background-color:#006699; color:white;}

th {
    background-color:  #2eb82e;
    color: white;
}


</style>

</head>
<body>
<div id="result_table">

</div>

<script>
var s = document.getElementById("a1")
s.onsubmit = sub;
function sub()
    {
        return a;
    }
</script>


<?php


$con=mysqli_connect("localhost","root","","airline");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM airport");

echo "<table border='1'>
<tr >
<th>Airport Code</th>
<th>Name</th>
<th>City</th>
<th>State</th>
<th>Country/th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2]. "</td>";
  echo "<td>" . $row[3] . "</td>";
  echo "<td>" . $row[4] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);

//Output results
?>
</body>
</html>
