<?php 
function passGenerator($passwordLen,$charArray){
    if($passwordLen=="unset"){
    }
    elseif ($passwordLen > 0) {
        for ($i = 0; $i < $passwordLen; $i++) {
            echo $charArray[rand(0, 65)];
        }
    } elseif($passwordLen<=0){
        echo "Devi inserire un numero positivo!";
    }
}
?>