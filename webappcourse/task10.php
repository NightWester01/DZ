<?php
$min=rand(0,59);
if ($min<=15)
echo $min."1/4";
else if($min <=30)
echo $min."2/4";
else if ($min <=45)
echo $min."3/4";
else if ($min <=60)
echo $min."4/4";
