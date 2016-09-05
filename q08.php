<?php 
//1.Ededin faktorialini hesablayan Class yazin//

class Factorial {
    public $eded;
    public function __construct($eded) {
        $this->eded = $eded;
        $this->faktorial();
    }

    public function faktorial(){
        $a = 1;
        for($i = 1 ; $i <= $this->eded ; $i++){
            $a *= $i;
        }
        echo "ededin faktoriyali ".$a." -dir";
    }
}

$obj = new Factorial(3);

 ?>