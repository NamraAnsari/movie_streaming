<?php
session_start();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
    <title>NNS Movies</title>
</head>
<body>
    <header>
        <div class="container group">
            <div class="head-area group">
                <div class="right-area">
                    <div class="logo">
                        <h3>NNS MOVIES</h3>
                    </div>
                    </div>
                    <div class="left-area group">
                        <nav class="user_register">
                            <ul class="group">
                                <li class="active"><a>Home</a></li>
                                <li><?php

                                    if (isset($_SESSION['user_name'])) {
                                        echo '<div class="group">
                                        <form action="logout.php" method="post"><div class="logout"><input type="submit" name="log_out" value="Logout"></div></form></div>';
                                    }

                                 ?></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
    </header>
