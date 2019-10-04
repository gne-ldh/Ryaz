<?php include "./config.php"; ?>
<?php include "./session.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Account Settings</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

  
  <?php include "./sidebar.php"; ?>


        <div class="right-side">
          <h3>Account Settings</h3>
          <p>Want to change the your Info!</p>
          <br>
          <div class="grid-container">
            <div class="left-side-grid">
              <h4>Account Details</h4>
          <p> Name - Username</p>
          <p>Phone Number - XXXXXXXXXX</p>
          <P>Email - abc@gmail.com</P>
            </div>
            <div class="right-side-grid">
              <a class="waves-effect waves-light btn change-info">Change Info</a>
            </div>
          </div>
        </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>
      