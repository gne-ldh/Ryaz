
<?php
include 'config.php';
if(isset($_POST['btn-signup']))
{
  $a=$_POST['username'];
  $b=$_POST['password'];
  $c=$_POST['conf_pass'];
  $d=$_POST[''];
 

  $insert="INSERT INTO tablename VALUES(null,'$a','$b','$c','$d')";
  $res=mysqli_query($conn,$insert);
  if($res)
  {
    echo "<script>alert('Insertion Successful!')</script>";
  }

  
  else
  {
    echo "<script>alert('Insertion Unsuccessful!')</script>";
  }

}
?>