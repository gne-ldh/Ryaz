<?php include "./config.php"; ?>
<?php include "./session.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Dashboard</title>
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
      <button data-target="modal1" class="btn modal-trigger">Add Paper</button>
    </div>
  </div>


  <div id="modal1" class="modal" style="width:600px; display:flex; justify-content:center;">
    <div class="modal-content">
      <h4>Add paper</h4>
      <form method="POST">

        <div>
          <div class="input-field col s12">
            <select name='sub_code' id='sub_code' required>
              <option value="" disabled selected>Choose your Semester</option>
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
              <option value="5">5th</option>
              <option value="6">6th</option>
            </select>
            <label for='sem'>Semester</label>
          </div>
        </div>

        <div>
          <div class='input-field col s12'>
            <input class='validate' type="text" name='p_id' id='p_id' required />
            <label for='p_id'>PaperID</label>
          </div>
        </div>

        <div>
          <div class='input-field col s12'>
            <input class='validate' type="text" name='max_marks' id='max_marks' required />
            <label for='max_marks'>Max. Marks</label>
          </div>
        </div>

        <div>
          <div class="input-field col s12">
            <select name='sem' id='sem' required>
              <option value="" disabled selected>Choose your Semester</option>
              <option value="1">1st</option>
              <option value="2">2nd</option>
              <option value="3">3rd</option>
              <option value="4">4th</option>
              <option value="5">5th</option>
              <option value="6">6th</option>
            </select>
            <label for='sem'>Semester</label>
          </div>
        </div>

        <div>
          <div class='input-field col s12'>
            <input class='validate' type="number" name='year' id='year' required value="2019" />
            <label for='year'>Year</label>
          </div>
        </div>

        <br />
        <div class='row' style="color:white;padding-bottom:10%;">
          <button style="color:white;font-size: 1rem;" type='submit' name='btn_login' class='col s3 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Add</button>
        </div>
        <form>
    </div>
  </div>
  </div>

  <!-- right-side -->
  <table>
    <tr>
      <th>Name</th>
      <th>Department</th>
      <th>Email</th>
    </tr>
    <tr>
      <td>Demo</td>
      <td>Demo</td>
      <td>demo</td>
    </tr>

  </table>
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
if (isset($_POST['btn_login'])) {
  addPaper($_POST['sub_code'], $_POST['p_id'], $_POST['max_marks'], $_POST['sem'], $_POST['year']);
}
?>