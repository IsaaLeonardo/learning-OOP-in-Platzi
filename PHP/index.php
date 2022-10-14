<?php

require_once('car.php');
require_once('account.php');
require_once('uberX.php');

$uberX = new UberX("AC45R", new account("Andrés Herrera", "AND456"), "Chevrolet", "Corsa");
echo $uberX->dataCar();