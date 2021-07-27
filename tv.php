<?php
$servername = "localhost";
$username = "userLogin";
$password = "123456";
$dbname = "db";


$cnt = mysqli_connect($servername, $username, $password, $dbname); // $cnt= new mysqli() ~ = mysqli_connect()

if ($cnt->connect_error) {											// $cnt->connect_error ~ mysqli_connect_error()
  die("Connection failed: " . $cnt->connect_error);
}
$sql= "INSERT into login(id,uName) VALUES (5,'ys'),(6,'yi'),(7,'yone')";
if(mysqli_query($cnt,$sql)){
	echo "Successfully";
}else {
	echo "Error: ".$sql. "<br>". mysqli_error($cnt);
}


$data = "SELECT id, uName FROM login";
$result = $cnt->query($data);                                       // ~ mysqli_query($cnt,$data)

if ($result->num_rows > 0) {										//
  while($row = $result->fetch_assoc()) {							// fetch_assoc()/ mysqli_fetch_assoc() finds out a result row as an array
    echo "id: " . $row["id"]. " -Name: " . $row["uName"]. "<br>";
  }
} else {
  echo "0 results";
}
$cnt->close(); // close()/mysqli_close(connection)


?>
