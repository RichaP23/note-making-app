<?php 
    session_start();
    $showPopup=false;
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
        header("location : login.php");
        exit;
    }
    require "_dbconneCt.php";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["submit"])){
            
        $showPopup = true; // Set flag to show popup
        }
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <?php require 'nav.php'?>
    <div class=container>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome, Sweetheart! 💖</title>
    <style>
        .popup {
            display: <?php echo $showPopup ? 'block' : 'none'; ?>; /* Show/hide based on PHP */
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffe6f0;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            color: #ff69b4;
            z-index: 1000;
        }

        .overlay {
            display: <?php echo $showPopup ? 'block' : 'none'; ?>;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #ffe6f0; /* Light pink background */
            text-align: center;
            padding: 50px;
            color: #ff69b4; /* Hot pink text */
        }
        h1 {
            font-size: 3em;
            margin-bottom: 20px;
            text-shadow: 2px 2px #ffb6c1; /* Light pink shadow */
        }
        p {
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        textarea {
            width: 80%;
            padding: 15px;
            margin-bottom: 20px;
            border: 2px solid #ffb6c1; /* Light pink border */
            border-radius: 10px;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            font-size: 1em;
            background-color: #fff0f5; /* Light lavender blush background */
            color: #ff69b4;
        }
        button {
            padding: 10px 20px;
            background-color: #ff69b4;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        .heart {
            color: #ff1493; /* Deep pink hearts */
            font-size: 1.5em;
            margin: 0 5px;
            animation: heartbeat 1s infinite alternate;
        }
        @keyframes heartbeat {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.1);
            }
        }
    </style>
</head>
<body>
    <h1>Welcome, Darling! <span class="heart">💖</span></h1>
    <p>Share your lovely thoughts with us today! <span class="heart">💖</span></p>
    <p>whenever you want to logout click here <a href="/practice/logout.php">use this link</a></p>
    <form action="/practice/welcome.php" method="post">
    <textarea name="text" placeholder="Enter your day's thoughts here..."></textarea><br>
    <button type="submit" name="submit">Submit <span class="heart">💖</span></button>
</form>
<div class="overlay" id="overlay"></div>

<div class="popup" id="thankYouPopup">
    <h2>Thank You! <span class="heart">💖</span></h2>
    <p>Thank you for sharing! Bye, take care! <span class="heart">💖</span></p>
    <button onclick="closePopup()">Close</button>
</div>
<script>
    function closePopup() {
        document.getElementById('thankYouPopup').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('closePopupHidden').value = "true";
        document.forms[0].submit();
    }
</script>

</body>
</html>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>