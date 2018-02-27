<?php 

class Subtraction implements OperatorInterface {
    public function run($number, $result) {
        return $result - $number;
    }
}