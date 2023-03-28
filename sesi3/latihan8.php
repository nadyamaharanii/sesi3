<?php 
     
    echo "luas persegi panjang dengan nilai panjang 3 dan lebar 5 adalah" .hitungluas(1,1);

    function hitungluas($pj = 1,$lb = 1){
    return $pj*$lb;
    }
    echo hitungluas(3,5);
    