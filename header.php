<nav class="navbar navbar-expand-sm  bg-dark sticky-top">
    <div class="container ">
        <img src="image\Designer-removebg-preview.png"  width="75" height="45" class="rounded-circle mr-4"><h3 class="navbar-brand">HemoGlow</h3> 

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

          <?php }  else { ?>
                    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light button-32" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light button-32" href="register.php">Register</a>
            </li>

        </ul>

        <?php } ?>

        <?php if (isset($_SESSION['username'])) { ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link btn btn-light" href="logout.php">Logout</a>
                    </li>
                </ul>
            <?php } ?>


       </div>
    </div>
</nav>



<style>


.button-32 {
  background-color:pink ;
  border-radius: 5px;
  color: black;
  cursor: pointer;
  font-weight: bold;
  padding: 4px 10px;
  text-align: center;
  transition: 200ms;
  width: 100%;
  height:relative;
  box-sizing: border-box;
  border: 0;
  font-size: 16px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-32:not(:disabled):hover,
.button-32:not(:disabled):focus {
  outline: 0;
  background:white ;
  box-shadow: 0 0 0 2px rgba(0,0,0,.2), 0 3px 8px 0 rgba(0,0,0,.15);
}

.button-32:disabled {
  filter: saturate(0.2) opacity(0.5);
  -webkit-filter: saturate(0.2) opacity(0.5);
  cursor: not-allowed;
}

</style>