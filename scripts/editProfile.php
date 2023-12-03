<?php
    session_start();
    if(isset($_SESSION['proof'])) {
        $passNew = $_SESSION['proof'];
    }else {
       header('location: ./login.php');
    }
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
    <link rel="stylesheet" href="../styles/editProfile.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!--Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />



    <title>Edit Profile</title>
</head>

<body>

    <nav class="ms-5 mt-3 d-flex  justify-content-between">
        <img src="../assets/devchallenges.svg" alt="DevChallenges Logo">

        <div class="me-5 mt-3 dropdown">
            <button class="buttonToggle" id="buttonToggle"><?php echo $passNew['name'] . ' user'?></button>
            <ul class="menuToggle" id="menuToggle">
                <div class="proof">
                <li class="limenu"><span class="material-symbols-outlined icons">person
                    </span><a class="text-decoration-none textOptions" href="./profile.php">My Profile</a></li>
                </div>

                <div class="w-100 proof"  style="border-bottom: 1px solid #E0E0E0;">
                <li class="limenu"><span class="material-symbols-outlined icons">group
                    </span><a class="text-decoration-none textOptions" href="#">Group Chat</a></li>
                </div>

                <div class="proof">
                <li class="limenu"><span class="material-symbols-outlined icons" style="color:red">logout</span><a class="text-decoration-none textOptions" style="color: red;" href="./logout.php">Logout</a></li>
                </div>
            </ul>

        </div>
    </nav>


    <div class="d-flex align-items-center justify-content-center">
        <a href="./profile.php" class="stepBack">
            < Back</a>
    </div>
    <form action="./saveDB.php" method="POST" class="d-flex align-items-center justify-content-center">
        <div class="conte">
            <header class="ms-5 mt-4">
                <h2 class="change">Change Info</h2>
                <p class="changeP">Changes will be reflected to every services</p>
            </header>
            <div class="ms-5 photoprofile d-flex">
                <span class="material-symbols-outlined">photo_camera</span>
                <p class="photo">foto</p>
                <p class="photoP">CHANGE PHOTO</p>
            </div>
            <div class="ms-5 nameDiv">
                <p class="name">Name</p>
                <input name="name" class="inputName" type="text" placeholder="Enter your name...">
            </div>
            <div class="ms-5 bioDiv">
                <p class="name">bio</p>
                <input name="bio" class="inputbio" type="text" placeholder="Enter your bio...">
            </div>
            <div class="ms-5 nameDiv">
                <p class="name">Phone</p>
                <input name="phone" class="inputName" type="text" placeholder="Enter your phone...">
            </div>
            <div class="ms-5 nameDiv">
                <p class="name">Email</p>
                <input name="email" class="inputName" type="text" placeholder="Enter your email...">
            </div>
            <div class="ms-5 nameDiv">
                <p class="name">Password</p>
                <input name="contrasena" class="inputName" type="password" placeholder="Enter your password...">
            </div>
            <button class="ms-5 saveButton">Save</button>
    </form>

    </div>
    <div class="d-flex align-items-center justify-content-center">
        <div class="d-flex  justify-content-between footerLo">
            <p class="created">created by ChissgaN</p>
            <p>devChallenges.io</p>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="../main.js"></script>
</body>

</html>