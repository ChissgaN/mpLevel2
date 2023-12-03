<?php

require_once './cone.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $correo = $_POST['email'];
    $password = $_POST['contrasena'];
}

$query = 'SELECT * FROM  usu WHERE email = ?';

try {
    $stm = $pdo->prepare($query);
    $stm->execute([$correo]);

    $result = $stm->fetch(PDO::FETCH_ASSOC);

    if(password_verify($password,$result['contrasena'])){
        session_start();
        $_SESSION['proof'] = $result;
        header('location: ./profile.php');
    } else {
        echo 'contrase;a incorrecta';
    }

    
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>