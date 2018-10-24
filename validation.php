<?php

session_start();
if(isset($_POST['login'])){
    include 'conf.php';
    $name = mysqli_real_escape_string($conn, $_POST['userName']);
    $pwd = mysqli_real_escape_string($conn, $_POST['password']);

    if (empty($name) || empty($pwd)) {
        header("Location: login.php?login=empty");
        exit();
    }else{
        $SELECT = "SELECT * FROM register WHERE username='$name'";
        $result = mysqli_query($conn, $SELECT);
        $num = mysqli_num_rows($result);
        if ($num < 1) {
            header("Location: login.php?login=error");
            exit();
        }else {
            if ($row = mysqli_fetch_assoc($result)) {
                $decode_pwd = password_verify($pwd, $row['password']);
                if ($decode_pwd == false) {
                    header("Location: login.php?login=incorrectpassword");
                    exit();
                }elseif($decode_pwd == true){
                    $_SESSION['user_name'] = $row['username'];
                    header("Location: home.php?login=success");
                    exit();
                }
            }
        }
    }
}else{
    header("Location: login.php");
    exit();
}

?>
