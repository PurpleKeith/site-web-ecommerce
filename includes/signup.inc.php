<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($username, $email, $pwd, $pwdrepeat) !== false){
        header("location: ../account.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false){
        header("location: ../account.php?error=invalidUsername");
        exit();
    }
    if (invalidEmail($email) !== false){
        header("location: ../account.php?error=invalidEmail");
        exit();
    }
    if (pwdMatch($pwd, $pwdrepeat) !== false){
        header("location: ../account.php?error=passwordsdontmatch");
        exit();
    }
    if (uidExists($conn, $username, $email) !== false){
        header("location: ../account.php?error=usernametaken");
        exit();
    }

    createUser($conn, $username, $email, $pwd);
}
else{
    header("location: ../account.php");
    exit();
}