<html>
<head>
  
  <title>Add User</title>

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
<!-- 
<div class="container">



	<div class="row">
	<div class="section"></div> -->
   <main>
    <!-- <center> -->

     <div class="container">

      
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; width: 40%; padding: 0px 48px 0px 48px; border: 1px; margin-top: 10px; solid #EEE;">

      <h3 style="color:#26a69a;margin-bottom:10%; ">Add User</h3>
    
  
    
      <i class="mdi-alert-error red-text"></i>
    
  
            <div>
            <div class='input-field col s12'>
                <input class='validate' type="text" name='name' id='username' required / style="padding:">
                <label for='username'>Username</label>
              </div>
            </div>

             <div>
              <div class='input-field col s12'>
                <input class='validate' type="password" name='password' id='password' required />
                <label for='password'>Password</label>
              </div>
            </div>

             <div>
              <div class='input-field col s12'>
                <input class='validate' type="password" name='conf_pass' id='conf_pass' required />
                <label for='conf_pass'>Confirm Password</label>
              </div>
            </div>


            <div>
              <div class='input-field col s12'>
                <!-- <input class='validate' type="user_type" name='user_type' id='user_type' required /> -->
                <label for='user_type'>User Type</label>
              </div>
          
  </div>
            <div>
            <li style="float:left;list-style-type:none;">
              <label>
                <input name="group1" type="radio"/>
                <span>Teacher</span>  
              </label>
      
            </li>
            <li style="list-style-type:none;">
              <label style="margin-left:90px;">
              <input name="group1" type="radio"/>
              <span>Student</span>
              </label>
            </li>
    
            </div>
            
            <!-- <center> -->
              <div class='row' style="color:white;padding:10%; ">
                <button style="margin-left:50px;color:white;font-size: 1rem"  type='submit' name='btn_signup' class='col  s7 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>sign up</button></div>
                
            
            <!-- </center> -->
     
        </div>
       </div>
      <!-- </center> -->
      </main>

	</div>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>

<script src="js/jquery-3.4.1.min.js"></script>


</body>

</html>