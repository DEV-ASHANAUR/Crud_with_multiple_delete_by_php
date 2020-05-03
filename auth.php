<?php
    session_start();
    include 'main.php';
    //include "Flash_data.php";
    $obj = new Main();

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = $obj->retrive($username);
        if($data->num_rows>0){
            while($row=$data->fetch_object()){
                $user = $row->username;
                $pass = $row->password;
                //echo $pass;
            }
        }
        $type_pass = md5($password);
        if($type_pass === $pass){
            $_SESSION['ok'] = $user;
            header("location:dashboard.php");
        }else{
            // Flass_data::pass_msg('Username or Password is Incorrect!');
            header("location:login.php?pass=3");
        }

    }















?>