<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="stylecontact.css?version=14">
  <title>Contact Us</title>
</head>

<body>
  <div class="contain">
    <header>
      <section class="UP">
        <?php include 'navbar.php'; ?>
      </section>

    </header>
    <main>
      <section>
        <div>
          <img src="images/1130832-1920x1080-desktop-full-hd-calisthenics-wallpaper-photo.jpg" alt="" class="img99">
          <p class="ann">
            If you have any question or you want more infos about us all what you have is just to send a message !
          </p>
        </div>
      </section>
      <section>
        <div class="cont">
          <h1 class="title">
            Contact Us
          </h1>


          <div class="form-container">
            <div class="form">
              <form method="POST" action="mailer.php" id="contact-form">
                <h2>Contact us</h2>
                <p><label>First Name:</label> <input name="name" type="text" /></p>
                <p><label>Email Address:</label> <input style="cursor: pointer;" name="email" type="text" /></p>
                <p><label>Message:</label> <textarea name="message"></textarea> </p>
                <p><input type="submit" value="Send" /></p>
              </form>
            </div>
          </div>
        </div>
  </div>

  </section>
  </main>
  </div>
</body>

</html>