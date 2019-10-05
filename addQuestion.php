<?php include "./config.php"; ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Create Question Paper</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/main.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

  
  <?php include "./sidebar.php"; ?>


        <div class="right-side">
          <h3>Create Question Paper</h3>
          <br>
          <form action="">
           <label for="">Question</label> <input style="width: 60%; margin-right:45px;" type="text" name="Question_name">
           <label for="">Marks</label> <input style="width:10%;" type="text" name="Marks"> <br>

           <button style="margin-top: 30px;" class="btn waves-effect waves-light" type="submit" name="action">Add Question
            <i class="material-icons right">send</i>
            </button>
          </form>
          <p></p>
        </div>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>
      