<?php
    require_once 'Client.php';
    require_once 'Order.php';
    require_once 'Pizza.php';

   
    //informations clients
    $client = new Client();
    $client->name = "Asley";
    $client->email = "asleygarcia@yahoo.fr";
    $client->phone = "07 82 86 17 58";
    echo $client->vue();
    //Choose Pizza
    $pizza = new Pizza();
    $pizza->pizza("Reine");
    //Order
    $order = new Order();
    $order->status = "En preparation";
    $order->date = "07/11/2021";
    echo $order->vueOrder();
    
    echo "Merci pour votre visite!!!";
    


?>