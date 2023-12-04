<?php
require_once './cone.php';
session_start();
$tool = $_SESSION['proof']['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $bio = $_POST['bio'];
    $phone = $_POST['phone'];
    $password = $_POST['contrasena'];
    $contra = password_hash($password, PASSWORD_DEFAULT);

    $base_url = '../photos/';
    $tmp = $_FILES['photo']['tmp_name'];
    $imgName = $_FILES['photo']['name'];
    $ext = pathinfo($imgName, PATHINFO_EXTENSION);
    $url = $base_url . "profile$user_id." . $ext;
    move_uploaded_file($tmp, $url);


    $query = "UPDATE usu SET `email` =?, `contrasena` =?, `photo` =?, `name` =?, `bio` =?, `phone` =? WHERE id =?";

    
    try {
        $stmt = $pdo->prepare($query);
        $res = $stmt->execute([$email, $contra, $url, $name, $bio, $phone, $tool]);

        if ($res) {
            $query = "SELECT * FROM usu WHERE id = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$tool]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION['proof'] = $result;
            header('location: ./profile.php');
            exit();
        }
    } catch (PDOException $e) {
        echo 'Error en la consulta: ' . $e->getMessage();
    }
}else {
    echo 'error';
}
?>