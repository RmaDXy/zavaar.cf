<?php

session_start();

if (isset($_POST['submit'])) {
    include 'db.php';

    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
    $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

    //Err Handlers 
    if (empty($uid) || empty($pwd)) {
        header("Location: ../index.php?login=emptyFields");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email='$uid'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1) {
            header("Location: ../index.php?login=usernameIncorrect");
            exit(); 
        } else {
            if ($row = mysqli_fetch_assoc($result)) {
                /* echo $row['user_uid']; */
                $hashedPwdchk = password_verify($pwd, $row['user_pwd']);
                    if ($hashedPwdchk == false) {
                        header("Location: ../index.php?login=passwordIncorrect");
                        exit();
                    } elseif ($hashedPwdchk == true) {
                        /* LOGS THE USER IN */
                        $_SESSION['u_id'] = $row['user_id'];
                        $_SESSION['u_uid'] = $row['user_uid'];
                        $_SESSION['u_email'] = $row['user_email'];
                        header("Location: ../index.php?login=success");
                        exit();
                    }
            }
        }
    }

} else {
    header("Location: ../index.php?login=error");
    exit();
}

/* ECHO THE ERRS */