<?php

if (isset($_POST['submit'])) {
    session_start();
    echo '<h2>Logout was Successful</h2>';
    session_unset();
    session_destroy();
    header("Location: ../index.php?logout=success");
    exit();
}