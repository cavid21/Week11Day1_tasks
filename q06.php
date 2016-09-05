<?php 
/*PHP OOP yaxinlasmasinnan istifade ederek iki tarix arasindaki ferqi tapin.
Qeyd: Uzun hesablamalar aparmaga ehtiyac yoxdur. maksimum 4 setirle hell edin*/

$date1 = date_create(date("H:i:s"));
for($i = 0 ; $i < 10000000 ; $i++){}
$date2=date_create(date("H:i:s"));
var_dump($diff = date_diff($date1,$date2));
 ?>