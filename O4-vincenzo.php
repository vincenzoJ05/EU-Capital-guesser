<?php
$array=[3,4,5,8,9,12,13,6];
sort($array);

foreach($array as $arr){
    if($arr > 5){
        echo $arr.",";
    }
}
?>