<?php
session_start();
if(isset($_SESSION["proof"])) {
    $passNew = $_SESSION['proof'];    
}else{ 
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
    <link rel="stylesheet" href="../styles/profileStyle.css">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;400&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!--Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Profile</title>
</head>

<body>
    <nav class="ms-5 mt-3 d-flex  justify-content-between">
        <img src="../assets/devchallenges.svg" alt="DevChallenges Logo">

        <div class="me-5 mt-3 dropdown">
            <button class="buttonToggle" id="buttonToggle"><?php echo $passNew['name']?><span class="material-symbols-outlined iconToggle">expand_more</span></button>
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

    <h1 class="d-flex align-items-center justify-content-center mt-5 personal">Personal info</h1>
    <p class="d-flex align-items-center justify-content-center basic">Basic info, like your name and photo</p>


    <table class="d-flex align-items-center justify-content-center">
        <tbody class="tabla">
            <th class="enca d-flex  justify-content-between">
                <div class="HeaderTable">
                    <p class="profile">Profile</p>
                    <p class="some">Some info may be visible to other people</p>
                </div>
                <a href="./editProfile.php"><button type="submit" class="buttonEdit">Edit</button></a>
            </th>
            <div class="tableTwo">
            <tr class="file">
                <td class="name">PHOTO</td>
                <td class="photo" style="background-image: url('<?php echo $passNew['photo']; ?>');"></td></td>
            </tr>
            <tr class="fileTwo"> 
                <td class="name">NAME</td>
                <td><?php echo $passNew['name']  ?></td>
            </tr>
            <tr class="fileTwo">
                <td class="name">BIO</td>
                <td><?php echo $passNew['bio']  ?></td>
            </tr>
            <tr class="fileTwo">
                <td class="name">PHONE</td>
                <td><?php echo $passNew['phone']  ?></td>
            </tr>
            <tr class="fileTwo">
                <td class="name">EMAIL</td>
                <td><?php echo $passNew['email']  ?></td>
            </tr>
            <tr class="fileLast">
                <td class="name">PASSWORD</td>
                <td><?php echo '*****' ?></td>
            </tr>
            </div>

        </tbody>
    </table>


    <div class="d-flex align-items-center justify-content-center">
    <div class="d-flex justify-content-between divEnd">
        <p class="created">created by ChissgaN</p>
        <p>devChallenges.io</p>
    </div>
    </div>

    <!-- JavaScript -->
    <script src="../javaScripts/main.js"></script>
    
</body>

</html>