<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/get-started-style.css">
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    .button {
     width: 100px;
     height: 10px;
     padding: 10px 0px 20px 30px;
     font-size: 15px;
     color: white;
     border: 2px solid white;
     border-radius: 20px;
   }
   .button a{
     text-decoration: none;
     color: white;
   }
   .button a:hover{
     color:#00EE9E;
   }
    </style>
  </head>
  <body>
    <section id="Home">
      <div class="Background">
          <div class="content">
            <p  style="font-size:1.1rem;">Welcome To</p>
            <h1>Foot World Wear</h1>
            <?php if (isset($_GET['error'])) { ?>
              <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

                <?php if (isset($_GET['success'])) { ?>
                     <p class="success"><?php echo $_GET['success']; ?></p>
                <?php
              } ?>
              <?php if (isset($_GET['username'])) { ?>
             <p class="success"> Thank you <?php echo $_GET['username']; ?></p>
                      <?php
                } ?>
            <br>
            <p>Please click button below to </p>
            <br>
              <div class="button"><a href="index.php">&nbsp;Log In</a></div>
          </div>
      </div>
    </section>

  </body>
</html>
