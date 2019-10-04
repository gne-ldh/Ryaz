<?php
if (!isset($_SESSION["userName"])){
    header("location: login.php");
}
?>