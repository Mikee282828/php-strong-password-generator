<?php
$passwordLen = $_GET["passwordLen"];
$charArray = array_merge(range('A', 'Z'), range('a', 'z'));

if($passwordLen>0){
    for($i = 0; $i<$passwordLen; $i++){
    echo $charArray[rand(0,51)];
}
}else{
    echo "Devi inserire un numero positivo!";
}

?>