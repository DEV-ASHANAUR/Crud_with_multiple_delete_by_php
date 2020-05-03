<?php
    session_start();
    include 'Main.php';
    //include "Flash_data.php";
    $obj = new Main();

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $reg = $_POST['reg'];
        $dept = $_POST['dept'];
        $shift = $_POST['shift'];
        $mobile = $_POST['mobile'];

        $status = $obj->insert($name,$roll,$reg,$dept,$shift,$mobile);
        if($status){
            //Flass_data::insert_msg('Your Feedback recived successfully!');
            header("location:index.php?sus=1");
        }
        //header("location:project.php");

    }



?>