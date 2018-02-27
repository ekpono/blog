<?php 
require_once 'init.php';



$c = new Calculator;

$c->setOperation(new Adder);
$c->calculate(20, 5);

$c->setOperation(new Subtraction);
$c->calculate();


$c->setOperation(new multiplier);
$c->calculate();

$c->setOperation(new Divider);
$c->calculate();

echo $c->getResult();