<?php

$USERNAME = 'root';
$PASSWORD = 'namra1997';
$HOST = 'localhost';
$DATABASE = 'movie_streaming';

$conn = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE);
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: ".mysqli_connect_error();
}else{
    echo "Connection Successful.";
    mysqli_select_db($conn, $DATABASE);
}
