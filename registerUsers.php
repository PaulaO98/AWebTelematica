<?php

    // session_start();
    include("conexion.php");

    $name=$_POST['name'];

    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    /* Se realiza la consulta adecuada */

    $sql = "insert into users (name, phone, address, password, email) values ('$name', '$phone', '$address', '$password','$email')";
    $result = mysqli_query($con, $sql);
    header("Location: loginregisro.php");
?>