<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).-->

<?php

//Inserimento parametri carta(scadenza) e user(sconto tramite registrazione) attratersvo metodo GET

 //Exception
 function cardValidation($cardexp) {
  if ($cardexp < 2022) {
  throw new Exception('La sua carta è scaduta o non è stata ancora inserita');
  }
  return $cardexp;
 }

 try {
  echo cardValidation('La sua carta è stata accettata per l\'acquisto');
  } catch (Exception $e) {
  echo 'Eccezione: ' . $e->getMessage();
  }

class Cibo
{
  public $articolo;
  public $price;
  public $peso;
  public $scadenza;
  public $cardexp;

  //Costruttore
  public function __construct($_articolo, $_price, $_peso, $_scadenza ){
    $this -> setArticolo($_articolo);
    $this -> setPrice($_price);
    $this -> setPeso($_peso);
    $this -> setScadenza($_scadenza);
  }

  //setter
  public function setarticolo($_articolo){
    $this -> articolo = $_articolo;
    return $this;
  }

  public function setpeso($_peso){
    $this -> peso = $_peso;
    return $this;
  }

  public function setPrice($_price){
    $this -> price = $_price;
    return $this;
  }

  public function setScadenza($_scadenza){
    $this -> scadenza = $_scadenza;
    return $this;
  }


  //Getter
  public function getArticolo(){
    return $this -> articolo;
  }

  public function getPeso(){
    return $this -> peso;
  }

  public function getPrice(){
    return $this -> price;
  }

  public function getScadenza(){
    return $this -> scadenza;
  }

}

//istanziamo
$croccantini = new Cibo( 'Croccantini Digestive', 35 , 10000 , 2024 );

echo "<h2> Categoria Cibo: </h2>";

echo "<h4> Nome articolo - " . $croccantini -> getArticolo() . "</h4>";
echo "<p> Prezzo articolo - " . $croccantini -> getPrice() . "€</p>";
echo "<p> Peso articolo - " . $croccantini -> getPeso() . " gr.</p>";
echo "<p> Scadenza articolo - " . $croccantini -> getScadenza() . "</p>";

$dentastix = new Cibo( 'Dentastix Hills', 5 , 20 , 2023 );

echo "<h4> Nome articolo - " . $dentastix -> getArticolo() . "</h4>";
echo "<p> Prezzo articolo - " . $dentastix -> getPrice() . "€</p>";
echo "<p> Peso articolo - " . $dentastix -> getPeso() . "gr.</p>";
echo "<p> Scadenza articolo - " . $dentastix -> getScadenza() . "</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP-2</title>
    <style>
        .order_user{
            color:purple;
        }
        .order_card{
            color:brown;
        }
    </style>
</head>
<body>
    
</body>
</html>