<?php

$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';



$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

if (!empty($_GET)){
  if (array_key_exists("all", $_GET)){
    $stmt = $conn -> query ("SELECT * FROM countries");
  }
  else if(array_key_exists("country", $_GET)){
    $country = $_GET['country'];
    $stmt = $conn->query('SELECT * FROM countries WHERE name = "%$country%"');

    echo '<ul>';
    foreach ($stmt as $row) {
        {
      echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
        }
    
    echo '</ul>';
  }
}
}

