<?php

  // aşağıdakı kodun nəticəsinə salam! çıxması üçün boşluğun yerinə nə yazılmalıdır?

    class a {
       public function greet(){
           self::salam();
       }
       protected function salam(){
           echo "salam!";
       }
       
    }
    a::greet();
    
//mene gore esl yolu budur yuxaridakinin islemesi biraz qaranliqdi 
//    class a {
//       static function greet(){
//           self::salam();
//       }
//       protected static function salam(){
//           echo "salam!";
//       }
//    }
//    a::greet();
?>
