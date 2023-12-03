<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap 5 JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS styles -->
    <link rel="stylesheet" href="../styles/registerStyle.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!--Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Register</title>
</head>
<body class="d-flex align-items-center justify-content-center">
    <div class="d-flex flex-column align-items-center justify-content-center divAll">
        <div class="p-5 divMain">
            <img src="../assets/devchallenges.svg" alt="DevChallenges Logo">
            <p class="text">Join thousands of learners from around the world</p>
            <p class="textTwo">Master web development by making real-life projects. There are multiple paths for you to choose</p>

        <form action="./scripts/register.php" method="POST">
        <div class="divInputs">
            <span class="material-symbols-outlined">mail</span>
            <input name="email" placeholder="Email" class=" form-control w-356.48 inputEmailPass">
        </div>      
        <div  class="divInputs">
            <span class="material-symbols-outlined">lock</span>
            <input name="contrasena" type="password" placeholder="Password" class=" form-control w-356.48 inputEmailPass">
        </div>    
            <button type="submit" name="submit" class="bg-primary buttonLogin">Start coding now</button>
    </form>

    <p class="d-flex align-items-center justify-content-center letter">or continue with these social profile</p>

            <div class="d-flex align-items-center justify-content-center divSocial">
                <img class="social" src="../assets/Google.svg" alt="google">
                <img class="social" src="../assets/Facebook.svg" alt="facebook">
                <img class="social" src="../assets/Twitter.svg" alt="twitter">
                <img src="../assets/Gihub.svg" alt="gihub">
            </div>
            <div class="d-flex align-items-center justify-content-center letter">
                <p class="letterQuestion">Don’t have an account yet?</p>
                <a href="./scripts/login.php" class="register">Login</a>
            </div>
</div>

<div class="d-flex  justify-content-between footerLo">
    <p class="created">created by ChissgaN</p>
    <p>devChallenges.io</p>
</div>
   
</body>
</html>