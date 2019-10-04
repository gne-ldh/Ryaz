<?php include "./config.php"; ?>
<?php include "./session.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Create User</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/main.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<style>
  .header-button-div {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }
  }
</style>

<body>


  <?php include "./sidebar.php"; ?>

  <div class="right-side">
    <div class="header-button-div">
      <h3>Dashboard</h3>
      <button data-target="modal1" class="btn modal-trigger">Add User</button>


      <div id="modal1" class="modal" style="width:600px; display:flex; justify-content:center;">
        <div class="modal-content">
          <h4>Add User</h4>
          <form method="POST">

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' id='username' required />
                <label for='username'>Username</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="password" name='password' id='password' required />
                <label for='password'>Password</label>
              </div>
            </div>

            <br />
            <div class='row' style="color:white;padding-bottom:10%;">
              <button style="color:white;font-size: 1rem;" type='submit' name='btn_register' class='col s3 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Add</button>
            </div>
            <form>
        </div>
      </div>
    </div>
  </div>

  <script>
    (function($) {
      $(function() {
        $('.modal').modal();
        $('#modal1').modal('open');
        $('#modal1').modal('close');
        $('#modal-trigger').modal();
      });
    })(jQuery);


    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('select');
      var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
      $('select').formSelect();
    });
  </script>



  <!-- jQuery CDN -->
  <script src="js/jquery-3.4.1.min.js"></script>

  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


</body>

</html>
<?php
if (isset($_POST['btn_register'])) {
  addUser($_POST['username'], $_POST['password']);
}
?>