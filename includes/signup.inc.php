<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    
    require_once 'bd.inc.php';
    require_once 'functions.inc.php';

    if (lipsaInput($username,$password,$confirm_password) !==false) {
        header("location: ../autentificare.php?error=lipsa_input");
        exit();
    }

    if (invalidEmail($username) !==false) {
        header("location: ../autentificare.php?error=emil_invalid");
        exit();
    }

    if (verificareParola($password,$confirm_password) !==false) {
        header("location: ../autentificare.php?error=parolanuseportiveste");
        exit();
    }

    if (verificaEmail($conn,$username) !==false) {
        header("location: ../autentificare.php?error=emil_exista");
        exit();
    }

    creazaUser($conn,$username,$password);

} else {
    header("location: ../autentificare.php");
    exit();
}

if (isset($_GET["error"])) {
    if($_GET["error"]=="lipsa_input"){
        echo "<p> Contul fenrir sau parola lipseste!</p>";
    }
    else if ($_GET["error"]=="emil_invalid") {
        echo "<p>Contul fenrir nu este valid</p>";
    } else if ($_GET["error"]=="parolanuseportiveste"){
        echo "<p>Parola nu se portiveste</p>";
    } else if ($_GET["error"]=="emil_exista") {
        echo "<p>Contul existent</p>";
    }
}