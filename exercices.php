<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styleexercices.css?version=100">
  <title> Workout</title>
  <script src="exercices.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styleexercices.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://fonts.cdnfonts.com/css/ghost-bayou" rel="stylesheet">
  <link href=" https: //cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet" />
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>

  <style>
    #table {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      background-color: rgb(56, 56, 56);
    }

    .card {
      width: 500px;
      margin: 15px;
      opacity: 0;
      transform: translateY(50px);
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
      background-color: rgb(53, 53, 53);
      color: aliceblue;
    }

    .in-view {
      opacity: 1;
      transform: translateY(0);
    }

    .card-img-top {
      width: 100%;
      height:100%;
      object-fit: cover;
      transition: 0.2s;
    }

    .card-img-top:hover {
      opacity: 50%;
      height: 100%;
      object-fit: cover;
    }
  </style>

</head>

<body>
  <div class="contain">
    <header>
      <section class="UP">
        <?php
        include('navbar.php');
        ?>
        <section class="secion1">
          <h1 class="title1  ">Basics</h1>
        </section>

      </section>

    </header>
    <main>
      <div id="text mt-5">
        <p class="p1">
          these are few examples concerning the three differnt cathegories of Calisthnics hope you enjoy it!
        </p>
      </div>
      <h1 class="cathegorie1 mt-5">
        Basics
      </h1>

      <div class="row row-cols-1 row-cols-md-2 g-4 mt-5 w100" id="table">
        <div class="col">
          <div class="card">
            <img src="images/push up.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Normal push up</h5>
              <p class="card-text">
                The normal push up is the fiirst step to enter the world of calisthenics it's easy to do and it's necessary for the chest muscle and triceps as a second muscle

              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/muscle up mv.jpg" class="card-img-top" alt="" />
            <div class="card-body">
              <h5 class="card-title">Decline push up</h5>
              <p class="card-text">
                it's basicly the best exercice for the upper chest
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pikepushup.gif" class="card-img-top" alt="Los Angeles Skyscrapers" />
            <div class="card-body">
              <h5 class="card-title">Pike push up</h5>
              <p class="card-text">
                it's a good exercice for traps and shoulders as a first muscle and lower chest as a second muscle
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/easypull-min.gif" class="card-img-top" alt="Skyscrapers" />
            <div class="card-body">
              <h5 class="card-title">easy pull</h5>
              <p class="card-text">
                fpr those who can't pull up it's a good exercice to make a progress in pull ups
              </p>
            </div>
          </div>
        </div>


        <div class="col">
          <div class="card">
            <img src="images/dips.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Dips</h5>
              <p class="card-text">
                it's one of the most poular execuses for triceps and chest especially lower chest
              </p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pulling.gif" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Pull up</h5>
              <p class="card-text">
                it's one of the most popular exercices to work back and shoulders and touching the body core generally this exercice is the most imoprortant exercice in the world of calisthenics
              </p>
            </div>
          </div>
        </div>
        
          </div>
        </div>
      </div>
      <h1 class="cathegorie2 mt-5">
        STATICS
      </h1>
      <div class="row row-cols-1 row-cols-md-2 g-4 mt-5" id="table">
        <div class="col">
          <div class="card">
            <img src="images/1130832-1920x1080-desktop-full-hd-calisthenics-wallpaper-photo.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">Full planche/h5>
                <p class="card-text">
                  it's one of the most complicated moves in the static cathegorie and it's based by the whole upper body
                </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/OIP (1).jpeg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">straddle planche push up</h5>
              <p class="card-text">
                it's like a lite full planche which the legs are away not like the full planche; and that's why the gravity center becomes lighter
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/front lever.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">switched grip full planche</h5>
              <p class="card-text">
                in this type of full planches you should reverse the grip of your arms and concentrate on your core to make this planche straight
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/pp.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">one arm planche</h5>
              <p class="card-text">
                it's the hardest skill in the cali world cause all the body weight in one arm and no way it's the best skill in this sport
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/op.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">wide press neg full palnche</h5>
              <p class="card-text">
                it's a combos mixed from wide full planche and handstand and if you want to make your full planche push ups better you have to concentrate on this exercice
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/ofr.jpeg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">one arm front</h5>
              <p class="card-text">
                it's like the one arm full planche but it's like the second best skill in the cali world cause it's the hardest type of front levers
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/one arm h.jpg" class="card-img-top" alt="Hollywood Sign on The Hill" />
            <div class="card-body">
              <h5 class="card-title">press and negative full planche</h5>
              <p class="card-text">
                it's much heavier than the wide one but it help so much to make you wide full planche better even the planche push ups
              </p>
            </div>
          </div>
        </div>
        
    </main>

  </div>

</body>

</html>