<!DOCTYPE html>
<html lang="en">
<head>
  <style>
.container {
  max-width: 1700px;
  margin: 0 auto;
  padding: 10px 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-family: 'JMH SS', sans-serif;
}

.a1{
  color: #f0f8ff;
}

nav {
  background-color: rgb(255, 255, 255);
  color: rgb(0, 0, 0);
  height: 120px;
  width: 100%;
  position: fixed;
  z-index: 999999999;
}

ul{
  display: flex;
  list-style: none;
}
li{
  margin-right: 20px;
  transition: 0.2s;
}

nav ul li:hover{
  transform: scale(1.09);
}
a{
  color: rgb(0, 0, 0);
  font-size: 20px;
  text-decoration: none;
  
}
.btn1{
  border: none;
  border-radius: 12px;
  color: #f0f8ff;
  background-color: rgba(215, 50, 50, 0.959);
  width: 130px;
  transition: 0.2s;
}

.btn1:hover{  
  color: #f0f8ff;
  background-color: rgba(48, 12, 12, 0.959);
  transform: scale(1.03);
}
.img1{
  height: 80px;
  margin-right:300px;
}

  </style>
</head>
<body>
   <nav class="container">
          <h1>Calisthenics Workout</h1>
          <img src="images/OIP.jpeg" alt="" class="img1">
          <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="exercices.php">Exercices</a></li>
            <li><a href="plannigs.php">planing</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <button class="btn1"><a href="index.html" class="a1">Login</a></button>

          </ul>
        </nav>
</body>
</html>