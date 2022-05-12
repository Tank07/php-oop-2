<?php

include __DIR__ . '/../index.php';

class Cucce extends Cibo {
  //proprietà esclusive di Cucce
  public $lunghezza;
  public $larghezza;
  public $altezza;

  public function __construct(  $_articolo,  $_price,  $_peso,  $_lunghezza,  $_larghezza, $_altezza ){
    //Setter del padre
     $this -> setarticolo($_articolo);
     $this -> setpeso($_peso);
     $this -> setPrice($_price);
    //setter del figlio: Cucce
    $this -> setLunghezza($_lunghezza);
    $this -> setLarghezza($_larghezza);
    $this -> setAltezza($_altezza);
  }

  public function setLunghezza($_lunghezza){
    $this -> lunghezza = $_lunghezza;
    return $this;
  }

  public function setLarghezza($_larghezza){
    $this -> larghezza = $_larghezza;
    return $this;
  }

   public function setAltezza($_altezza){
    $this -> altezza = $_altezza;
    return $this;
  }

  public function getLunghezza(){
    return $this -> lunghezza;
  }

  public function getLarghezza(){
    return $this -> larghezza;
  }

   public function getAltezza(){
    return $this -> altezza;
  }

}


$castle = new Cucce ('Castle', '10', 500, 400, 400, 600 );

echo "<h2 class='cucce'> Categoria Cucce: </h2>";

echo "<h4 class='cucce'> Nome articolo - " . $castle -> getArticolo() . "</h4>";
echo "<p class='cucce'> Prezzo articolo - " . $castle -> getPrice() . "kg</p>";
echo "<p class='cucce'> Peso articolo - " . $castle -> getPeso() . "€</p>";
echo "<p class='cucce'> Lunghezza articolo - " . $castle -> getLunghezza() . "cm</p>";
echo "<p class='cucce'> Larghezza articolo - " . $castle -> getLarghezza() . "cm</p>";
echo "<p class='cucce'> Altezza articolo - " . $castle -> getAltezza() . "cm</p>";

$capsule = new Cucce ('capsule', '3', 30 , 150, 60, 70 );

echo "<h4 class='cucce'> Nome articolo - " . $capsule -> getArticolo() . "</h4>";
echo "<p class='cucce'> Prezzo articolo - " . $capsule -> getPrice() . "kg</p>";
echo "<p class='cucce'> Peso articolo - " . $capsule -> getPeso() . "€</p>";
echo "<p class='cucce'> Lunghezza articolo - " . $capsule -> getLunghezza() . "cm</p>";
echo "<p class='cucce'> Larghezza articolo - " . $capsule -> getLarghezza() . "cm</p>";
echo "<p class='cucce'> Altezza articolo - " . $capsule -> getAltezza() . "cm</p>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <style>
        .cucce{
            color:red;
        }
    </style>
</head>
<body>
    
</body>
</html>