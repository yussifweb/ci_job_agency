<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo site_url('dashboard'); ?>">Hi, <?php echo $_SESSION['name']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  
  <div class="my-2 my-lg-0">
        <a class="btn btn-sm btn-primary" href="index.php" role="button">LogIn</a>
        <a class="btn btn-sm btn-danger" href="<?php echo site_url('home/logout'); ?>" role="button">Log Out</a>
        <a class="btn btn-sm btn-primary" href="register.php" role="button">Register</a>
        <img class="rounded" src="images/user" alt="User">
    </div>

</nav>
