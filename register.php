<?php
include('connection.php');

if(isset($_POST['register'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $year = $_POST['year'];
  $gender = $_POST['gender'];

  $hashedpassword = password_hash($password, PASSWORD_DEFAULT);

  $stmt = $conn->prepare("INSERT INTO coach (username, password, month, day, year, gender) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssiiis", $username, $hashedpassword, $month, $day, $year, $gender);

  if($stmt->execute()){
    echo "Account registered successfully";
    header("Location:home.php");
    exit();
  }
  else{
    echo "Error: " . $stmt->error;
  }
  $stmt->close();
}

$conn->close();
?>
