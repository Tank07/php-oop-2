<?php

// include __DIR__ . '/../giochi.php';
// include __DIR__ . '/../cucce.php';
// include __DIR__ . '/index.php';

// $user = (!empty($_GET['user'])) ? $_GET['user'] : '';
// $cardexp = (!empty($_GET['cardexp'])) ? $_GET['cardexp'] : '';

// echo "<p class='order_user'> UserState: $user </p>" ;

// if ($user == 'registered'){
//   echo "<p class='order_user'> Essendo registrato ha diritto ad uno sconto del 20%";
// } else if ($user == 'guest'){
//   echo "<p class='order_user'> Le consigliamo di registrarsi per avere uno sconto del 20% su tutto il catalogo";
// } else {
//   echo "<p class='order_user'> Paramentro inserito errato o mancante, si prega di riprovare";
// }

// echo "<p class='order_card'> CardExpirationDate: $cardexp </p>" ;

 //Exception
//  function cardValidation($cardexp) {
//   if ($cardexp < 2022) {
//   throw new Exception('La sua carta è scaduta o non è stata ancora inserita');
//   }
//   return $cardexp;
//  }

//  try {
//   echo cardValidation('La sua carta è stata accettata per l\'acquisto');
//   } catch (Exception $e) {
//   echo 'Eccezione: ' . $e->getMessage();
//   }



  class CreditCard
{
  public $titolare;
  public $cardexp;
  public $cvv;
  public $codice;
  

  //Costruttore
  public function __construct($_titolare, $_cardexp, $_cvv, $_codice ){
    $this -> setTitolare($_titolare);
    $this -> setCardexp($_cardexp);
    $this -> setCvv($_cvv);
    $this -> setCodice($_codice);
  }

  //setter
  protected function setTitolare($titolare){
    $this -> titolare = (!empty($_GET['titolare'])) ? $_GET['titolare'] : '';
    return $this;
  }

  protected function setCvv($cvv){
    $this -> cvv = (!empty($_GET['cvv'])) ? $_GET['cvv'] : '';
    return $this;
  }

  protected function setCardexp($cardexp){
    $this -> cardexp = (!empty($_GET['cardexp'])) ? $_GET['cardexp'] : '';  
    return $this;
  }

  protected function setCodice($codice){
    $this -> codice = (!empty($_GET['codice'])) ? $_GET['codice'] : '';
    return $this;
  }


  //Getter
  public function getTitolare(){
    if (strpos($this -> titolare,' ') == 1){
        echo "<p class='order_card'> Nominativo titolare accettato </p>";
    } else {
        echo "<p class='order_card'> Si è pregati di porre uno spazio tra nome e cognome </p>"; //Capire come GET visualizzi lo spazio tra due caratteri
    }
    return $this -> titolare;
  }

  public function getCvv(){
    if (is_numeric($this -> cvv) && strlen($this -> cvv) == 3){
        echo "<p class='order_card'> Codice CVV accettatto </p>";
    } else {
        echo "<p class='order_card'> Immettere nuovamente il codice, grazie </p>";
    }
    return $this -> cvv;
  }

  public function getCardexp(){
    if ($this -> cardexp > 2022){
        echo "<p class='order_card'> La sua carta è stata accettata per l'acquisto </p>";
      } else {
        echo "<p class='order_card'> La sua carta è scaduta o non è stata ancora inserita </p>";
      }   
    return $this -> cardexp;
  }

  public function getCodice(){
    if (is_numeric($this -> codice) && strlen($this -> codice) == 12){
        echo "<p class='order_card'> Codice carta accettatto </p>";
    } else {
        echo "<p class='order_card'> Immettere nuovamente il codice, grazie </p>";
    }
    return $this -> codice;
  }

}

//istanziamo
$pagamento1 = new CreditCard( 0, 0, 0, 0 );

echo "<h2> Carrello: </h2>";

echo "<p> Nome titolare - " . $pagamento1 -> getTitolare() . "</p>";
echo "<p> Card Expiration - " . $pagamento1 -> getCardexp() . "</p>";
echo "<p> Cvv Carta - " . $pagamento1 -> getCvv() . "</p>";
echo "<p> Codice carta - " . $pagamento1 -> getCodice() . "</p>";

// $dentastix = new CreditCard( 'Dentastix Hills', 5 , 20 , 2023 );

// echo "<h4> Nome articolo - " . $dentastix -> getTitolare() . "</h4>";
// echo "<p> Card Expiration - " . $dentastix -> getCardexp() . "€</p>";
// echo "<p> cvv articolo - " . $dentastix -> getCvv() . "gr.</p>";
// echo "<p> codice articolo - " . $dentastix -> getCodice() . "</p>";




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