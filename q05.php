<?php 
	/*Asagidaki kodlar-ın outputu necə olacaq və nə üçün?*/


// 1-ci
$x = 5;
echo $x;
echo "<br />";
echo $x+++$x++;//$x 5 olduqu ucun 5 + 6 = 11;
echo "<br />";
echo $x; // $x 7dir cunki iki defe increment etdik
echo "<br />";
echo $x---$x--; //$x 11 olduqu ucun 11- 10 = 1;
echo "<br />";
echo $x;//$x 5dir cunki iki defe decrement etdik



//2-ci
var_dump(0123 == 123); //false cunki qarsisinda 0 olduqu ucun 8lik olur
var_dump('0123' == 123); //true cunki == valueye gore hesablayir  
var_dump('0123' === 123);//false cunki === hem de type gore yoxluyur


//3-cü
$x = true and false;
var_dump($x);//true cunki compare edende ilk olani goturur 


//4-cü $x-in dəyəri nə olacaq?
$x = 3 + "15%" + "$25";//18 qaytarir cunki eger ''-lar icerisinde number varsa onu edede cevirir eger hemin ededin qarsisinda sitirn gelirse birinci o zmana stringe cevirir
 ?>