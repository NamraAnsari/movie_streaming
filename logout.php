<?php

if (isset($_POST['log_out'])) {
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

?>
