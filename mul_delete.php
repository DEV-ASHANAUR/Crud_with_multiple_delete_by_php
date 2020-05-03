<?php
    include "Main.php";
    $obj = new Main();

    if(isset($_POST['submit']) && $_POST['idd'] != ''){
        $idd = $_POST['idd'];
        $c = count($idd);
        //echo $idd[0];
        for($i = 0; $i<$c; $i++){
            $status = $obj->delete($idd[$i]);
            header("location:dashboard.php?count=".$c);
        }
        
    }else{
        //echo "First Select Any checkbox";
        header("location:dashboard.php?error=notselect");
    }







?>