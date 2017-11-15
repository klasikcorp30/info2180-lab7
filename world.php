<?php

$host = "localhost";
$username = "klasikcorp";
$password = "curry30";
$dbname = "world";

$conn = mysqli_connect($host, $username, $password, $dbname);
//create a database connection

//Getting query parameter

$country = $_GET['country'];

$query = "SELECT * FROM countries"; //Perform database query

$results = mysqli_query($conn, $query);




echo '<ul>';
while ($array = mysqli_fetch_assoc($results)) {
	
  echo '<li>' . $array["$country"] . ' is ruled by ' . $array['head_of_state'] . '</li>';
}
echo '</ul>';



echo "<p style> $country </> ";
