<?php
$servername = getenv('bind_ip');
$username = "root";
$password = "mysql1pass";
$dbname = "time";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, c_time FROM t_time ORDER BY id DESC LIMIT 20";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - c_time: " . $row["c_time"] . "\n";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
