<?php
    //model 1
    //$age = array("peter" =>"35", "ben" => "37", "joe" => "43");

    //model 2
    $age["agus"] = "35";
    $age["lisa"] = "23";
    $age["agnes"] = "33";
    $age["sri"] = "40";
    $age["eka"] = "25"; 

    header ("content-type: application/json");
    echo json_encode($age);