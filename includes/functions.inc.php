<?php

function lipsaInput($username,$password,$confirm_password) {

    $rezultat = false;

    if (empty($username) || empty($password) || empty($confirm_password)) {
        $rezultat = true;
    }
    else {
        $rezultat = false;
    }

    return $rezultat;

}

function invalidEmail($username) {
    $rezultat = false;
    if(!filter_var($username,FILTER_VALIDATE_EMAIL)) {
        $rezultat = true;
    }
    else { 
        $rezultat = false;
    }

    return $rezultat;
}

function verificareParola($password,$confirm_password) {
    $rezultat= false;
    if($password !== $confirm_password) {
        $rezultat = true;
    } else {
        $rezultat = false;
    }
    return $rezultat;
}

function verificaEmail($conn,$username) {
    $sql = "SELECT * FROM users WHERE  contFenrir = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../autentificare.php?error=stmteroare");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"s",$username);
    mysqli_stmt_execute($stmt);

    $rezultat = mysqli_stmt_get_result($stmt);
    
    if($row = mysqli_fetch_assoc($rezultat)) {

        return $row;

    } else {
        $rezultat = false;
        return false;
    }

    mysqli_stmt_close($stmt);
}

function creazaUser($conn,$username,$password) {
    $sql = "INSERT INTO users (contFenrir,userPassword) VALUES (?,?) ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("location: ../autentificare.php?error=stmteroare");
        exit();
    }

    $hashedPassword = password_hash($password,PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt,"ss",$username,$hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../autentificare.php?error=none");
    exit();

}

function lipsaInputLogin($username,$password) {
    
    $rezultat = false;

    if (empty($username) || empty($password)) {
        $rezultat = true;
    }
    else {
        $rezultat = false;
    }

    return $rezultat;
}

function loginUser($conn, $username,$password) {
    $uidExista = verificaEmail($conn,$username);

    if($uidExista===false){
        header("location: ../index.php?error=logaregresita");
        exit();
    }

    $passwordHashed = $uidExista["userPassword"];
    $verificaPassword = password_verify($password,$passwordHashed);

    if($verificaPassword === false){
        header("location: ../index.php?error=logaregresita");
        exit();
    } else if ($verificaPassword===true) {
        session_start();
        $_SESSION["userid"]= $uidExista["usersId"];
        header("location: ../index.php?error=lipsa_input");
        exit();
    }
}