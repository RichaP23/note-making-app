<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include '_dbconnect.php';
    $login=false;
    $showError = false;
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $sql="SELECT * FROM  users WHERE username='$username'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    
    if($num==1){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password,$row['password'])){
                $login=true;
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                $showLogout=true;
                header("location: welcome.php");
                }
                else{
                    $showError=true;
                }
            }    
    }
    else{
        $showError=true;
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php require 'nav.php' ?>
<?php
if ($login == true) { //Added isset check
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong></strong>You are logged in.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
}
if (isset($showError) && $showError == true) { //Added isset check
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Error!</strong> Invalid Credentials
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
}
?>
<div class="container my-4">
    <h1 class="text-center">Login to our website</h1>
    <form action="/practice/login.php" method="post">
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="username">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>