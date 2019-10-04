<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "hack");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

function checkQuery($exe, $message)
{
  if ($exe) {
    echo "<script>alert('" . $message . "');</script>";
  } else {
    echo "<script>alert('Please Retry')</script>";
  }
}

function addDepartment($deptName)
{
  global $conn;
  $qry = "INSERT into departments values('','$deptName')";
  $exe = mysqli_query($conn, $qry);
  checkQuery($exe, 'Inserted');
}

function addPaper($subCode, $paperId, $maxm, $sem, $year)
{
  global $conn;
  $qry = "INSERT into paper values('','$subCode','$paperId','$maxm','$sem','$year')";
  $exe = mysqli_query($conn, $qry);
  checkQuery($exe, 'Inserted');
}

function addQuestions($paperId, $question, $part, $marks)
{
  global $conn;
  $qry = "INSERT into paper values('','$paperId', '$question', '$part', '$marks')";
  $exe = mysqli_query($conn, $qry);
  checkQuery($exe, 'Inserted');
}

function login($username, $passwd)
{
  global $conn;
  $sql = 'SELECT * FROM user WHERE uname = "' . $username . '" and password ="' . $passwd . '"';
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $count = mysqli_num_rows($result);
  if ($count == 1) {
    $_SESSION['userName'] = $row[1];
    $_SESSION['userType'] = $row[3];
    header("location: index.php");
  } else {
    echo "<script>console.log('Your Login Name or Password is invalid')</script>";
  }
}
