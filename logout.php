<?php
    session_start();
    if(isset($_GET['logout']) && $_GET['logout'] == 1){
        session_destroy();
        header("location:login.php");
    }




?>