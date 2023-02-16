<?php
$mas=['14','-10','45','-9'];
$pl=0;
$ms=0;
foreach($mas as $value){
    if($value>= 0){
        $pl=$pl+$value;
    }
    if($value<0){
        $ms=$ms+$value;
    }
}
echo $pl, ' ', $ms;