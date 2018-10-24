<?php
ini_set('display_errors', 1);
session_start();
if(isset($_POST['register'])){
    include 'conf.php';
        $name = mysqli_real_escape_string($conn, $_POST['userName']);
        $pwd = mysqli_real_escape_string($conn, $_POST['password']);
        $conf_pwd = mysqli_real_escape_string($conn, $_POST['confPassword']);

        if (empty($name) || empty($pwd) || empty($conf_pwd)) {
            header("Location: index.php?signin=empty");
            exit();
        }else{
            if(!filter_var($name, FILTER_VALIDATE_EMAIL)){
                header("Location: index.php?signin=invalid");
                exit();
            }else{
                 $SELECT = "SELECT * FROM register WHERE username='$name'";
                 $result = mysqli_query($conn, $SELECT);
                 $num = mysqli_num_rows($result);
                 if($num > 0){
                     header("Location: index.php?signin=usertaken");
                     exit();
                }else{
                    if($pwd != $conf_pwd){
                        header("Location: index.php?signin=incorrectpassword");
                        exit();
                    }else{
                        $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                        $INSERT = "INSERT INTO register (username, password) VALUES ('$name', '$hashedPwd')";
                        mysqli_query($conn, $INSERT);
                        header("Location: login.php");
                        exit();
                    }
                }
            }
        }
}else{
    header("Location: index.php");
    exit();
}
