<?php
include('connection.php');

if (isset($_POST['login'])) {
  $username  = $_POST["username"];
  $password = $_POST["password"];
  $month = $_POST['month'];
  $day = $_POST['day'];
  $year = $_POST['year'];
  $gender = $_POST['gender'];

  $stmt = $conn->prepare("SELECT * FROM coach WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $hashedpassword = $row['password'];

    if (password_verify($password, $hashedpassword)) {
      header("Location: home.php");
      exit(); // Add exit to stop further execution
    } else {
      header("Location: welcome.html?error=1"); 
      exit();
    }
  } else {
    header("Location: welcome.html?error=1"); 
    exit();
  }
} else {
  header("Location: welcome.html?error=1"); 
  exit();
}
?>
