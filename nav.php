<?php
    $showLogout=true;
    if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']==false){
        $showLogout=false;
    }else{
        $showLogout=true;
    }
    if(!isset($_SESSION['username']) || $_SESSION['username']==false){
        $showLogout=false;
    }
    else{
        $showLogout=true;
    }
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">iSecure</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/practice/login.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/practice/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/practice/signup.php">Signup</a>
        </li>
        <li class="nav-item">
        <?php if (isset($showLogout) && $showLogout === true): ?>
        <li class="nav-item">
            <a class="nav-link" href="/practice/logout.php">Logout</a>
        </li>
    <?php endif; ?>
        </li>
      </ul>
      
    </div>
  </div>
</nav>