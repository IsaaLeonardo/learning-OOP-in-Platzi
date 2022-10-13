<?php

require_once('car.php');
require_once('account.php');

$car = new Car("ASM451", new Account("Andrés Herrera", "123JHS"));
echo $car->dataCar();