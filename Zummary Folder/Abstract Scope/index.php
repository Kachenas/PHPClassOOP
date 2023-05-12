<?php

include_once "abstract/abstractClass.php";
include_once "classes/buyProductClass.php";


$buyProduct = new BuyProduct();
echo $buyProduct->getPayment();

?>