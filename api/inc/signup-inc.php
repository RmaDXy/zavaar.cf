<?php
/* Security Measure for post */
if (isset($_POST['submit'])) {
    include_once 'db.php';

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    /* Err handlers */
    if (empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../signup.php?signup=emptyFields");
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
            header("Location: ../signup.php?signup=invalidChars");
            exit();
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../signup.php?signup=invalidEmail");
                exit();
            } else {
                $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    header("Location: ../signup.php?signup=usernameTaken");
                    
                    exit(); 
                } else {
                    /*  */
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    $sqlInt = "INSERT INTO users (user_uid, user_email, user_pwd) VALUES ('$uid', '$email', '$hashedPwd');";
                    mysqli_query($conn, $sqlInt);
                    header("Location: ../signup.php?signup=successful");
                    exit(); 
                }
            }
        }
    }

} else {
    header("Location: ../signup.php");
    /* Doesn't really matter but yea */
    exit();
}