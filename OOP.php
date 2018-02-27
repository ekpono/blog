<?php
class Animal {

    protected  $name;
    protected $favourite_food;
    protected $sound;
    protected $id;

    public static $number_of_animals = 0;
    
    function getName(){
        return $this->name;
    }
    function __construct(){
        $this->id = rand(100, 1000);
        echo $this->id . "has been assigned";

       Animal: $number_of_animals++;
    }
    public function __destruct(){
        echo $this->name. "is being destroyed";
    }
    function __get($name){
        echo "Ask for " . $name . "<br />";
        return $this->$name;
    }

    function __set($name, $value){
        switch ($name){
                case  "name":
                    $this->name = $value;
                    break;

                case  "favourite_food":
                    $this->favourite_food = $value;
                    break;

                case  "sound":
                    $this->favourite_food = $value;
                    break;

                default :
                    echo $name . "Not Food";
            }
        echo "Set " . $name . " to " . $value . "<br />";

     }
     function run(){
         echo $this->name . "runs<br />";
     }
}

   class Dog extends Animal {
    function run(){
        echo $this->name . "runs like crazy<br />";
    }
        
} 

$animal_one = new Animal();

$animal_one->name = "spot";
$animal_one->favourite_food = "Meat";
$animal_one->sound = "cheeehoooo";

$animal_one->run = Cow;



?>