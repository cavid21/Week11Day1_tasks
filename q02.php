<?php
class Telebe {
 
  public $ad;
  public $soyad;
 
  public function __construct($ad , $soyad) {
      $this->ad = $ad;
      $this->soyad = $soyad;
  }

  public function qarsila()
  {
      echo "Salam ".$this->ad." ".$this->soyad;
      return $this;
  }     
 

  public function qeydiyyataAl()
  {
      //burada bazaya daxil edirik ve sonrada
      echo "!.Sizin müracietiniz qeyde alındı ";
      return $this;
  }
 

  public function melumatlandir()
  {
      echo " ve size email gönderildi.Teşekkürler";
  }
}

$telebe01 = new Telebe("Memmed" , "Hesenov");

$telebe01->qarsila()->qeydiyyataAl()->melumatlandir();



 //$telebe01->qeydiyyataAl();
//$telebe01->melumatlandir();

/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
?>