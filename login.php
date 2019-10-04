<?php include 'config.php' ?>
<html>
<head>
  
  <title>
    AdminForm
  </title>

  <style type="text/css">

     body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
      }
      main {
      flex: 1 0 auto;
      }
    body {
      background: #fff;
    }
  
    .container{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display:flex;
      align-items: center;
    }
  </style>

  <link rel="stylesheet" type="text/css" href="css/materialize.min.css">

</head>
<body>
   <main>
     <div class="container">   
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; padding: 0px 48px 0px 48px; border: 1px; margin-top: 50px; solid #EEE;">
      <h3 style="color:#26a69a;margin-bottom:10%; ">Login</h3>
    
  
    
      <i class="mdi-alert-error red-text"></i>
    
  <form method="POST">
            <div >
              <div class='input-field col s12'>
                <input class='validate' type="text" name='username' id='email' required />
                <label for='email'>Username</label>
              </div>
            </div>
            <div>
              <div class='input-field col m12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Password</label>
              </div>
              <label style='float: right;'>
              <a><b style="color: #F5F5F5;">Forgot Password?</b></a>
              </label>
            </div>
            <br/>
              <div class='row' style="color:white;padding-bottom:10%; ">
                <button style="margin-left:65px;color:white;font-size: 1rem"  type='submit' name='btn_login' class='col  s7 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>Login</button></div>
               <form> 
        </div>
       </div>
      </main>

	</div>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>

<script src="js/jquery-3.4.1.min.js"></script>


</body>

</html>
<?php
if(isset($_POST['btn_login'])){
    $sql = 'SELECT * FROM user WHERE uname = "'.$_POST["username"].'" and password ="'.$_POST["password"].'"';
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if($count == 1) {
       $_SESSION['userName'] = $row[1];
       $_SESSION['userType'] = $row[3];
       header("location: index.php");
    } else {
       echo "<script>console.log('Your Login Name or Password is invalid')</script>";
    }
 }
?>