<?php

trait User {
    public $user;

    protected function setUser($user){
        $this -> user = (!empty($_GET['user'])) ? $_GET['user'] : '';
        return $this;
      }

    public function getUser() {
        $user = (!empty($_GET['user'])) ? $_GET['user'] : '';

        if ($this -> user == 'registered'){
        echo "<p class='order_ok'> Essendo registrato ha diritto ad uno sconto del 20%";
        } else if ($this -> user == 'guest'){
        echo "<p class='order_error'> Le consigliamo di registrarsi per avere uno sconto del 20% su tutto il catalogo";
        } else {
        echo "<p class='order_error'> Paramentro inserito errato o mancante, si prega di riprovare";
        }
            return $this -> user;
            }
            }

?>
