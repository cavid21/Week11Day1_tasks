<?php 

//   Neticesi aşağıdakılar olan funksiya yazın

        /*
                ekranaYaz(); 				-->Boş
		ekranaYaz('salam'); 			-->arg1: salam
		ekranaYaz('salam', 'heci', 'necesen');  -->arg1: salam,arg2: heci,arg3: necesen


	*/

class Example{
    public function ekranaYaz($types =  array()) {
        foreach ($types as $value) {
            echo $value." ";
        }
    }
}

$obj = new Example();
$obj->ekranaYaz(array('5' , '3'));
