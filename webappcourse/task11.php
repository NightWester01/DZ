<?php
$mas=array(
    "Русский"=> array(
        "Понедельник",
        "Вторник",
        "Среда",
        "Четверг",
        "Пятница",
        "Суббота",
        "Воскресенье"
    )
    "English"=> array(
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    )
);
$lang=['ru','en'];
if($lang[0]){
    echo $mas["Русский"][1];
}
else($lang[1]){
    echo $mas["English"][1];
}
