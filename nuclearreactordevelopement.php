<?php 
session_start();

//$connectionn = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");
//mysqli_close($connectionn);
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.first{
  position: all;
}

body{
  background-image: url(https://wallpaperaccess.com/full/204728.jpg);
  background-repeat: no-repeat;
  background-color: #cccccc;
  height: 100%;
  
  background-repeat: no-repeat;
  background-size: cover;
  
}

table {
  font-family: arial, sans-serif;
  color: white;
  border-collapse: collapse;
  width: 50%;
  position: relative;
  
  }

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: rgba(0,0,0,0.5);
}
tr:nth-child(odd) {
  background-color: #122436;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #800000;
}

</style>
</head>
<body id="body">


<?php
//function evolve(){
if (isset($_POST['stage1']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Assembling the vacuum chamber';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>
<?php
//function evolve(){
if (isset($_POST['stage2']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Preparing a high pressure vacuum pump';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>
<?php
//function evolve(){
if (isset($_POST['stage3']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Building the inner grid';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>
<?php
//function evolve(){
if (isset($_POST['stage4']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Assembling the Deuterium system';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>
<?php
//function evolve(){
if (isset($_POST['stage5']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Connencting to high voltage';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>
<?php
//function evolve(){
if (isset($_POST['stage6']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Setting up neutron detection';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>
<?php
//function evolve(){
if (isset($_POST['stage7']))
{
    $connection = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");

      if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
      }

$command = mysqli_query($connection,"UPDATE War SET Completed=1 WHERE Construction='Firing up';");
    if (!$command) {
        die("Query failed: " .mysql_error() );
      }

      mysqli_close($connection);
}

//}

?>





<ul>
  <li><a class="active" href="nuclearreactordevelopement.php">Nuclear reactor developement</a></li>
  <li><a href="ncbmbdev.php">Nuclear bomb developement</a></li>
  <li><a href="quantumcomputerdevelopement.php">Quantum computer developement</a></li>
  <li><a href="armament.php">Armament</a></li>
  <li><a href="cyberattack.php">Cyber Attack</a></li>
  <li style="float:right"><a href="#about">Surrender</a></li>
</ul>
<table>
   <tr>
    
      <th>Construction Phase</th>
      <th>Completed</th>
      <th>Cost</th>
      <th>Time(s)</th>

<form method=post>
<div>
  <input  type="submit" class="button" name="stage1" value="Phase one">
  <input  type="submit" class="button" name="stage2" value="Phase two">
  <input  type="submit" class="button" name="stage3" value="Phase three">
  <input  type="submit" class="button" name="stage4" value="Phase four">
  <input  type="submit" class="button" name="stage5" value="Phase five">
  <input  type="submit" class="button" name="stage6" value="Phase six">
  <input  type="submit" class="button" name="stage7" value="Phase seven">
  
</div>
</form>      

    
  </tr>

<?php 
  $conn = mysqli_connect("remotemysql.com","QThHxJOKo8","6gAhstQfGc","QThHxJOKo8");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT Construction,Completed,Cost,Timetaken  FROM War";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Construction"]. "</td><td>" . $row["Completed"] . "</td><td>"
. $row["Cost"]. "</td><td>" . $row["Timetaken"]."</tr></td>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
  ?>

</table>

</body>
</html>
