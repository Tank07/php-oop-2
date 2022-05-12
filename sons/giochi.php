<?php

include __DIR__ . '/cucce.php';

class Giochi extends Cucce {
  //proprietà esclusive di giochi
  public $lunghezza;
  public $larghezza;
  public $altezza;
  public $colore;

  public function __construct(  $_articolo,  $_price,  $_peso,  $_lunghezza,  $_larghezza, $_colore ){
    //Setter del padre
     $this -> setarticolo($_articolo);
     $this -> setpeso($_peso);
     $this -> setPrice($_price);
    //setter del figlio: giochi
    $this -> setLunghezza($_lunghezza);
    $this -> setLarghezza($_larghezza);
    $this -> setColore($_colore);
  }

  public function setColore($_colore){
    //Possibile validazione dei dati
    $this -> colore = $_colore;
    return $this;
  }


   //Getter $larghezza
   public function getColore(){
    //Possibile validazione dei dati
    return $this -> colore;
  }

}


$palla = new Giochi ('Palla da tennis large con suono', '7', 400 , 10, 10 , 'Verde fluo' );

// var_dump($palla);

echo "<p class='giochi'> Nome articolo: " . $palla -> getArticolo() . "</p>";
echo "<p class='giochi'> Prezzo articolo: " . $palla -> getPrice() . "gr</p>";
echo "<p class='giochi'> Peso articolo: " . $palla -> getPeso() . "€</p>";
echo "<p class='giochi'> Lunghezza articolo: " . $palla -> getLunghezza() . "cm</p>";
echo "<p class='giochi'> Larghezza articolo: " . $palla -> getLarghezza() . "cm</p>";
echo "<p class='giochi'> Colore articolo: " . $palla -> getColore() . "cm</p>";

$bastone = new giochi ('Bastone in gomma', '4', 200 , 50 , 5, 'Marrone' );

// var_dump($bastone);

echo "<p class='giochi'> Nome articolo: " . $bastone -> getArticolo() . "</p>";
echo "<p class='giochi'> Prezzo articolo: " . $bastone -> getPrice() . "gr</p>";
echo "<p class='giochi'> Peso articolo: " . $bastone -> getPeso() . "€</p>";
echo "<p class='giochi'> Lunghezza articolo: " . $bastone -> getLunghezza() . "cm</p>";
echo "<p class='giochi'> Larghezza articolo: " . $bastone -> getLarghezza() . "cm</p>";
echo "<p class='giochi'> Colore articolo: " . $bastone -> getColore() . "cm</p>";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <style>
        .giochi{
            color:blue;
        }
    </style>
</head>
<body>
    
</body>
</html>