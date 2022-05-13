<?php

// include __DIR__ . '/../giochi.php';
// include __DIR__ . '/../cucce.php';

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

  require __DIR__ . '/trait.php';

  class CreditCard {

    //Trait
    use User;

  public $titolare;
  public $cardexp;
  public $cvv;
  public $codice;
  public $user;
  

  //Costruttore
  public function __construct($_titolare, $_cardexp, $_cvv, $_codice, $_user ){
    $this -> setTitolare($_titolare);
    $this -> setCardexp($_cardexp);
    $this -> setCvv($_cvv);
    $this -> setCodice($_codice);
    $this -> setUser($_user);
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
        echo "<p class='order_ok'> Nominativo titolare accettato </p>";
    } else {
        echo "<p class='order_error'> Si è pregati di porre uno spazio tra nome e cognome </p>"; //Capire come GET visualizzi lo spazio tra due caratteri
    }
    return $this -> titolare;
  }

  public function getCvv(){
    if (is_numeric($this -> cvv) && strlen($this -> cvv) == 3){
        echo "<p class='order_ok'> Codice CVV accettatto </p>";
    } else {
        echo "<p class='order_error'> Immettere nuovamente il codice, grazie </p>";
    }
    return $this -> cvv;
  }

  //Exception
  public function getCardexp(){
    if ($this -> cardexp < 2022){
        throw new Exception('La sua carta è scaduta o non è stata ancora inserita'); // echo "<p class='order_card'> La sua carta è scaduta o non è stata ancora inserita </p>"; 
      } else {
        echo "<p class='order_ok'> La sua carta è stata accettata per l'acquisto </p>";
      }   
    return $this -> cardexp;
  }

  public function getCodice(){
    if (is_numeric($this -> codice) && strlen($this -> codice) == 12){
        echo "<p class='order_ok'> Codice carta accettatto </p>";
    } else {
        echo "<p class='order_error'> Immettere nuovamente il codice, grazie </p>";
    }
    return $this -> codice;
  }

}

//istanziamo
$pagamento1 = new CreditCard( 0, 0, 0, 0, 0 );

echo "<h2> Carrello: </h2>";

echo "<p> Nome titolare - " . $pagamento1 -> getTitolare() . "</p>";
echo "<p> Card Expiration - " . $pagamento1 -> getCardexp() . "</p>";
echo "<p> Cvv Carta - " . $pagamento1 -> getCvv() . "</p>";
echo "<p> Codice carta - " . $pagamento1 -> getCodice() . "</p>";
echo "<p> Stato registrazione - " . $pagamento1 -> getUser() . "</p>";

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
        .order_ok{
            color:green;
        }
        .order_error{
            color:red;
        }
    </style>
</head>
<body>
    
</body>
</html>