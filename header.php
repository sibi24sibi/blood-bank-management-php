<nav class="navbar navbar-expand-sm navbar-light bg-dark sticky-top">
    <div class="container ">
        <a class=" " href="index.php"><img src="image/favicon.jpg"  width="30" height="30" class="rounded-circle mr-4"><h3 class="navbar-brand">Blood Bank</h3> </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
          </button>

          <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <?php }  else { ?>
                    <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
                <button class="button-32" role="button"><a class="nav-link "   href="login.php">Login</a></button>
            </li>
            <li class="nav-item">
                <button class="button-32" role="button"><a class="nav-link" href="register.php">Register</a></button>
            </li>

        </ul>

        <?php } ?>
       </div>
    </div>
</nav>



<style>


.button-32 {
  background-color: #fff000;
  border-radius: 12px;
  color: #000;
  cursor: pointer;
  font-weight: bold;
  padding: 4px 15px;
  text-align: center;
  transition: 200ms;
  width: 100%;
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
  background: #f4e603;
  box-shadow: 0 0 0 2px rgba(0,0,0,.2), 0 3px 8px 0 rgba(0,0,0,.15);
}

.button-32:disabled {
  filter: saturate(0.2) opacity(0.5);
  -webkit-filter: saturate(0.2) opacity(0.5);
  cursor: not-allowed;
}

</style>