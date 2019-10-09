<?php

require './logica/loguear.php';
require "./logica/conexion.php";

    $email = $_SESSION['email'];

    $q = "SELECT * from usuarios where email = '$email'";
    $consulta = mysqli_query($conexion, $q);
    $qArray = mysqli_fetch_array($consulta);

    $_SESSION['usuario'] = $qArray;

    print_r($_SESSION['usuario']);


    if ($qArray[3] === "Administrador"){
        header("location: ../../../Pages/Dashboard");
    }
    else if ($qArray[3] === "Estudiante") {
        header("location: ../../../Pages/Dashboard_Student");
    }

?>