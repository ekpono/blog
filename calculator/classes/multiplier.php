<?php 

class multiplier implements OperatorInterface {
    public function run($number, $result) {
        return $result * $number;
    }
}