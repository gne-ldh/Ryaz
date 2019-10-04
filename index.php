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
      <button data-target="modal2" class="btn modal-trigger">Add Department</button>
      <button data-target="modal3" class="btn modal-trigger">Add Subject</button>
      <button data-target="modal4" class="btn modal-trigger">Add Paper</button>



      <!-- Modal 1 -->
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
      <!-- End Modal 1 -->

      <!-- Modal 2 -->
      <div id="modal2" class="modal" style="width:600px; display:flex; justify-content:center;">
        <div class="modal-content">
          <h4>Add Department</h4>
          <form method="POST">

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='dept_name' id='deptname' required />
                <label for='dept_name'>Department Name</label>
              </div>
            </div>


            <br />
            <div class='row' style="color:white;padding-bottom:10%;">
              <button style="color:white;font-size: 1rem;" type='submit' name='btn_enter_dept' class='col s3 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Add</button>
            </div>
            <form>
        </div>
      </div>
      <!-- End Modal 2 -->

      <!-- modal 3 -->
      <div id="modal3" class="modal" style="width:600px; display:flex; justify-content:center;">
        <div class="modal-content">
          <h4>Add Subject</h4>
          <form method="POST">

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='sub_name' id='subname' required />
                <label for='sub_name'>Subject Name</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='sub_code' id='subcode' required />
                <label for='sub_code'>Subject Code</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='semester' id='sem' required />
                <label for='semester'>Semester</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='department' id='deptt' required />
                <label for='department'>Department</label>
              </div>
            </div>

            <br />
            <div class='row' style="color:white;padding-bottom:10%;">
              <button style="color:white;font-size: 1rem;" type='submit' name='btn_add_subject' class='col s3 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Add</button>
            </div>
            <form>
        </div>
      </div>
      <!-- end Modal 3 -->

      <!-- modal 4 -->
      <div id="modal4" class="modal" style="width:600px; display:flex; justify-content:center;">
        <div class="modal-content">
          <h4>Add Paper</h4>
          <form method="POST">

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='sub_code' id='subcode' required />
                <label for='sub_code'>Subject Code</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='paper_id' id='paperid' required />
                <label for='paper_id'>Paper ID</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='maxm' id='max_marks' required />
                <label for='maxm'>Max. Marks</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='sem' id='semester' deptt />
                <label for='sem'>Semester</label>
              </div>
            </div>


            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='year' id='year' deptt />
                <label for='year'>Year</label>
              </div>
            </div>

            <br />
            <div class='row' style="color:white;padding-bottom:10%;">
              <button style="color:white;font-size: 1rem;" type='submit' name='btn_add_paper' class='col s3 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Add</button>
            </div>
            <form>
        </div>
      </div>
      <!-- end Modal 4 -->



    </div>
    <!-- right-side -->
    <table>
      <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Email</th>
        <th>Email</th>
      </tr>
      <?php
      $paperData = getdata("paper", "6");
      foreach ($paperData as $paper_data) {
        echo "<tr>
        <td>$paper_data[0]</td>
        <td>$paper_data[1]</td>
        <td>$paper_data[2]</td>
        <td>$paper_data[3]</td>
      </tr>";
      }
      ?>

    </table>
  </div>

  <script>
    (function($) {
      $(function() {
        $('.modal').modal();
        $('#modal1').modal('open');
        $('#modal1').modal('close');
        $('#modal2').modal('open');
        $('#modal2').modal('close');
        $('#modal3').modal('open');
        $('#modal3').modal('close');
        $('#modal4').modal('open');
        $('#modal4').modal('close');
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

if (isset($_POST['btn_add_subject'])) {
  addSubject($_POST['sub_name'], $_POST['sub_code'], $_POST['semester'], $_POST['department']);
}

if (isset($_POST['btn_add_paper'])) {
  addPaper($_POST['sub_code'], $_POST['paper_id'], $_POST['maxm'], $_POST['sem'], $_POST['year']);
}

if (isset($_POST['btn_enter_dept'])) {
  addDepartment($_POST['dept_name']);
}
?>