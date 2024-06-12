<?php
$passwordLen = $_GET["passwordLen"];
if($passwordLen>0){
    for($i = 0; $i<$passwordLen; $i++){
    echo "X";
}
}else{
    echo "Devi inserire un numero positivo!";
}

?>