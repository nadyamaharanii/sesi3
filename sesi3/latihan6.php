<?php
    $mhs = array(
        array("ardika","2233445512","denpasar"),
        array("wahyu hidayat","12324567","karangasem"),
        array("lala","34562718","jawa timur"),
        array("murni","22437827","buleleng"), 
    );
    header("content-type: application/json");
    echo json_encode($mhs);