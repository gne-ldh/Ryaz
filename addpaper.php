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


     <div class="container">

      
        <div  class="z-depth-3 y-depth-3 x-depth-3 grey green-text lighten-4 row" style="display: inline-block; width: 40%; padding: 0px 48px 0px 48px; border: 1px; margin-top: 10px; solid #EEE;">

      <h3 style="color:#26a69a;margin-bottom:10%; ">Add User</h3>
    
  
    
      <i class="mdi-alert-error red-text"></i>
    
  
            <div>
            <div class='input-field col s12'>
                <input class='validate' type="text" name='sub_code' id='sub_code' required / style="padding:">
                <label for='submit'>Submit</label>
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
              <div class='input-field col s12'>
                <input class='validate' type="number" name='sem' id='sem' required />
                <label for='sem'>Semester</label>
              </div>
            </div>

            <div>
              <div class='input-field col s12'>
                <input class='validate' type="number" name='year' id='year' required />
                <label for='year'>Year</label>
              </div>
            </div>


         <!--    </div> -->
            

              <div class='row' style="color:white;padding:10%;">
                <button style="margin-left:50px;color:white;font-size: 1rem"  type='submit' name='btn_add_ppr' class='col  s7 btn btn-small white  waves-effect z-depth-1 y-depth-1 teal lighten-1'>sign up</button></div>
                
            

     
        </div>
       </div>

      </main>

	</div>
</div>

<script type="text/javascript" src="js/materialize.min.js"></script>

<script src="js/jquery-3.4.1.min.js"></script>


</body>

</html>