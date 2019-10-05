<?php
if (!isset($_SESSION["userName"])) {
    header("location: startup.php");
}
