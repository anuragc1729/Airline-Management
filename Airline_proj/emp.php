<!DOCTYPE>
<html>
<script></script>
<head>
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
    height: 27px;
    text-align: center;
}

tr:nth-child(even) {background-color: #f2f2f2}
tr:hover {background-color:#006699; color:white;}

th {
    background-color: #408000;
    color: white;
}

input[type=text] {
    
    width: 20%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
}

input[type=text]:focus{
    width: 40%;
    background-color: lightblue;
    border: 3px solid #555;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
textarea {
    width: 40%;
    height: 150px;
    padding: 12px 20px;
    font-size: 16px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    resize: none;
}
textarea:focus{
    width: 60%;
    /*height: 200px;*/
    background-color: lightblue;
    border: 3px solid #555;
    -webkit-transition: width 0.3s ease-in-out/*,height 0.3s ease-in-out*/;
    transition: width 0.3s ease-in-out/*,height 0.3s ease-in-out*/;
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

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>
<body onload="visi()">


<input id="status" style="width:300px; height:40px; display:block;" type="button" value="Show List of Employees " onclick="func()"/>
 <br>

<a href="emp.html"> INSERT INTO EMPLOYEE TABLE </a>
<br>
 <br>
<div id="resemp">
<center>

<?php


$con=mysqli_connect("localhost","root","","airline");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"CREATE VIEW emp_details as select e_id , name , sex , e.flight_id , ldate ,  departure_airport_code , arrival_airport_code FROM employee e INNER JOIN leg_instance l WHERE e.flight_id = l.flight_number");

$res = mysqli_query($con,"SELECT * FROM emp_details ");
echo "<table border='1'>
<tr >
<th>Employee id</th>
<th>Employee Name</th>
<th>Gender</th>
<th>Flight number</th>
<th>Date of flight</th>
<th>Departure Airport Code</th>
<th>Arrival Airport Code</th>
</tr>";

while($row = mysqli_fetch_array($res))
  {
  echo "<tr>";
  echo "<td>" . $row[0] . "</td>";
  echo "<td>" . $row[1] . "</td>";
  echo "<td>" . $row[2] . "</td>";
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
  var s1 = document.querySelector("#resemp1");
  var d = document.querySelector("#status");
  var d1 = document.querySelector("#status1");
  function visi(){
    s.style.visibility = "hidden";
    s1.style.visibility = "hidden";
  }
  function func(){
    s.style.visibility = "visible"; 
    d.style.visibility = "hidden"
  }
  function func1(){
    s1.style.visibility = "visible"; 
    d1.style.visibility = "hidden"

  }
function res()
    {
        var a = confirm("Would you like to Reset the form ?")
        return a;
    }

</script>
</body>
</html>
