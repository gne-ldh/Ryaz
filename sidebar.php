<aside>
          <div class="top-div-aside">
            <img src="images/user-picture.jpg" alt="">
            <h5><?php echo $_SESSION["userName"]; ?></h5>
            <h6><?php echo $_SESSION["userType"]; ?></h6>
          </div>

          <div>
              <div class="collection">
                  <a href="index.php" class="collection-item active">Dashboard</a>
                  <a href="entries.php" class="collection-item">Entries</a>
                  <a href="create.php" class="collection-item">Create Forms</a>
                  <a href="settings.php" class="collection-item">Settings</a>
                </div>
          </div>
</aside>