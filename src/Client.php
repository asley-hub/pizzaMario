<?php

class Client {
    protected $name, $email, $phone;

  
    public function money(int $money, int $price ){
        if($money < $price){
            echo "Votre credit est insuffisant";
        }else{
            $rendu = $money - $price;
            echo "Merci de votre visite. Rendu = $rendu";
        }
    }
    public function __set(string $name, $value)
    {
        if (property_exists($this, $name)) {
            $this->$name = $value;
        } else {
            throw new Exception("Attribut n'existe pas!");
        }
    }

    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        } else {
            throw new Exception("Attribut n'existe pas!");
        }
    }
    public function vue(): string
    {
        return " L'utilisateur: " . $this->name . ",</BR> Email: " . $this->email . ",</BR> Numero: " . $this->phone . "</BR>";
    }

}

?>