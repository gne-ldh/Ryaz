<?php include "./config.php"; ?>
<?php include "./session.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>On Air</title>
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
      <div class="flexbox-event">
        <h3>On Air</h3>
        <button data-target="modal1" class="btn modal-trigger">Live Paper</button>
      </div>

      <!-- Modal 1 -->
      <div id="modal1" class="modal" style="width:600px; display:flex; justify-content:center;">
        <div class="modal-content">
          <h4>Live Paper</h4>
          <form method="POST">

            <div class="input-field col s12">
              <select name='paperid' id='paperid' required>
                <option value="" disabled selected>Select an exam to make it live</option>
                <?php
                foreach ($papersAll as $paper) {
                  if ($paper[6] == '0') {
                    echo "<option value='$paper[2]'>" . getSubjectName($paper[1]) . "($paper[2])</option>";
                  }
                } ?>
              </select>
              <label for='paperid'>Paper ID</label>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='start' id='start' placeholder="08:56:AM" required />
                <label for='start'>Start Time</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="text" name='end' id='end' placeholder="08:56:AM" required />
                <label for='end'>End Time</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="date" name='date' id='date' required />
                <label for='date'>Date</label>
              </div>
            </div>

            <br />
            <div class='row' style="color:white;padding-bottom:10%;">
              <button style="color:white;font-size: 1rem;" type='submit' name='btn_live' class='col s3 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Add</button>
            </div>
            <form>
        </div>
      </div>
      <!-- End Modal 1 -->
    </div>
    <!-- right-side -->
    <table>
      <tr>
        <th>Paper ID</th>
        <th>Start</th>
        <th>End</th>
        <th>Date</th>
        <th>URL</th>
      </tr>
      <?php

      $onairAll = getData('onair', 6);
      foreach ($onairAll as $onair) {
        echo "<tr>
        <td>$onair[1]</td>
        <td>$onair[2]</td>
        <td>$onair[3]</td>
        <td>$onair[4]</td>
        <td><a href='./view.php?onairID=$onair[5]'>View</a></td>
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
if (isset($_POST['btn_live'])) {
  setLive($_POST['paperid'], $_POST['start'], $_POST['end'], $_POST['date']);
}
?>