<?php
$myArray=['auto','fiets','brommer','bus','vliegtuig','trein'];
$reverse = array_reverse($myArray);


foreach($reverse as $rev){
    echo $rev.", ";
}
?>