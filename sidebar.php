<aside>
  <div class="top-div-aside">
    <img src="images/user-picture.jpg" alt="">
    <h5><?php echo $_SESSION["userName"]; ?></h5>
    <h6><?php echo $_SESSION["userType"]; ?></h6>
  </div>

  <div>
    <div class="collection">
      <a href="index.php" class="collection-item">Dashboard</a>
      <a href="onair.php" class="collection-item">On Air</a>
      <a href="logout.php" class="collection-item">Logout</a>
    </div>
  </div>
</aside>