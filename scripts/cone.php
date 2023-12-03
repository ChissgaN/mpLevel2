<?php 

    $host = 'localhost';
    $dbname = 'login_db';
    $user = 'root';
    $pass = '';

    try {
        $pdo = new PDO("mysql: host=$host;dbname=$dbname", $user, $pass);
        echo "conects";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


?>