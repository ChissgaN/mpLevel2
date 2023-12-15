<?php

require_once  './cone.php';

if($_SERVER['REQUEST_METHOD']=== 'POST'){
        $correo = $_POST['email'];
        $password = $_POST['contrasena'];

        $passworHash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO usu (`email`, `contrasena`) VALUE (?,?)";
        $cone = $pdo->prepare($query);
        try {
                $cone->execute([$correo, $passworHash]);
                $querySelect = "SELECT  * FROM usu WHERE email = ?";

                $cone = $pdo->prepare($querySelect);
                $cone->execute([$correo]);

                $result = $cone->fetch(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION['proof'] = $result;
                header('location: ../scripts/profile.php');
                
            } catch (PDOException $e) {
                echo 'Error al registrar el usuario: ' . $e->getMessage();
            }
}

