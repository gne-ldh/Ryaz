<?php include "./config.php"; ?>
<?php include "./session.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <title>Entries</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="css/main.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <?php include "./sidebar.php"; ?>
  <div class="right-side">
    <!-- right-side -->
    <h3>Entries</h3>
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

    <!-- End right-side -->
    <p></p>
  </div>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <!-- jQuery CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>