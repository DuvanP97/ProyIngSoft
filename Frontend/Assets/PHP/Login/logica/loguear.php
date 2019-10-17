<?php

require "conexion.php";

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $q = "SELECT COUNT(*) as contar from usuarios where email = '$email' and password = '$password'";
    $consulta = mysqli_query($conexion, $q);
    $qArray = mysqli_fetch_array($consulta);

    if ($qArray['contar']>0) {
        $_SESSION['email'] = $email;
        header("location: ../amain.php");
    }
    else {
        echo "DATOS INCORRECTOS";
    }

?>