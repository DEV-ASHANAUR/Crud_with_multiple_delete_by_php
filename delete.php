<?php
    include "Main.php";
    $obj = new Main();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $status = $obj->delete($id);
        header('location:dashboard.php?del=1'); 
    }







?>