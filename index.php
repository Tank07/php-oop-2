<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).-->

<?php

class Cibo
{
  public $articolo;
  public $price;
  public $peso;
  public $scadenza;

  //Costruttore
  public function __construct($_articolo, $_price, $_peso, $_scadenza ){
    $this -> setArticolo($_articolo);
    $this -> setPrice($_price);
    $this -> setPeso($_peso);
    $this -> setScadenza($_scadenza);
  }

  //setter
  public function setarticolo($_articolo){
    //Possibile validazione dei dati
    $this -> articolo = $_articolo;
    return $this;
  }

  public function setpeso($_peso){
    //Possibile validazione dei dati
    $this -> peso = $_peso;
    return $this;
  }

  public function setPrice($_price){
    //Possibile validazione dei dati
    $this -> price = $_price;
    return $this;
  }

  public function setScadenza($_scadenza){
    //Possibile validazione dei dati
    $this -> scadenza = $_scadenza;
    return $this;
  }


  //Getter
  public function getArticolo(){
    //Possibile validazione dei dati
    return $this -> articolo;
  }

  public function getPeso(){
    //Possibile validazione dei dati
    return $this -> peso;
  }

  public function getPrice(){
    //Possibile validazione dei dati
    return $this -> price;
  }

  public function getScadenza(){
    //Possibile validazione dei dati
    return $this -> scadenza;
  }

  //Sconto prezzo
//   protected function setSconto($_sconto){
//     $this -> sconto = $_sconto * 2;
//     return $this;
//   }
}

//istanziamo
$croccantini = new Cibo( 'Croccantini Digestive', 35 , 10000 , 2024 );

echo "<p> Nome articolo: " . $croccantini -> getArticolo() . "</p>";
echo "<p> Prezzo articolo: " . $croccantini -> getPrice() . "€</p>";
echo "<p> Peso articolo: " . $croccantini -> getPeso() . " gr.</p>";
echo "<p> Scadenza articolo: " . $croccantini -> getScadenza() . "</p>";

$dentastix = new Cibo( 'Dentastix Hills', 5 , 20 , 2023 );

echo "<p> Nome articolo: " . $dentastix -> getArticolo() . "</p>";
echo "<p> Prezzo articolo: " . $dentastix -> getPrice() . "€</p>";
echo "<p> Peso articolo: " . $dentastix -> getPeso() . "gr.</p>";
echo "<p> Scadenza articolo: " . $dentastix -> getScadenza() . "</p>";



$user = (!empty($_GET['user'])) ? $_GET['user'] : '';
$cardexp = (!empty($_GET['cardexp'])) ? $_GET['cardexp'] : '';

echo "<p class='order'> UserState $user </p>" ;
echo "<p class='order'> CardExpirationDate $cardexp </p>" ;

if ($user == 'registered'){
  echo "<p class='order'> Essendo registrato ha diritto ad uno sconto del 20%";
} else if ($user == 'guest'){
  echo "<p class='order'> Le consigliamo di registrarsi per avere uno sconto del 20% su tutto il catalogo";
} else {
  echo "<p class='order'> Paramentro inserito errato, si prega di riprovare";
}

if ($cardexp > 2022){
  echo "<p class='order'> La sua carta è stata accettata per l'acquisto </p>";
} else {
  echo "<p class='order'> La sua carta è scaduta </p>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <style>
        .order{
            color:purple;
        }
    </style>
</head>
<body>
    
</body>
</html>