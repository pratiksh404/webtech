<?php

class Human
{
    // Properties of class Human
    public $skin = 'White';

    public $eye = 2;
    public $leg = 2;
    public $hand = 2;
    public $foot = 2;
    public $mouth = 1;
    public $ear = 2;

    protected $share_information = "I am protected sharable value";

    private $soul = "Human Soul";

    // Methods of class Human
    public function speak()
    {
        echo $this->skin . " Human speaking";
    }

    public function eat()
    {
        echo $this->skin . " Human eating";
    }

    public function showSoul()
    {
        echo "I am showing " . $this->soul;
    }

    public function __construct($skin = "white")
    {
        $this->skin = $skin;
    }
}

class Person extends Human
{
    public $name;
    public $age;
    public $interest;

    public function __construct($name, $age, $interest, $skin = "White")
    {
        $this->name = $name;
        $this->age = $age;
        $this->interest = $interest;
        parent::__construct($skin);
    }

    public function showInterest()
    {
        return $this->name . ' , ' . $this->interest . ' , Interest : ' . $this->share_information;
    }
}

$a = new Human("Black");
echo "<br>Skin: $a->skin";
echo "<br>Eye: $a->eye";
echo "<br>Hand: $a->hand";
echo "<br>Foot: $a->foot";
echo "<br>Mouth: $a->mouth";
echo "<br>Ear: $a->ear";
echo "<br>";
$a->speak(); // Accessing Method
echo "<br>";
$a->eat(); // Accessing Method
echo "<br>";
$a->showSoul();
echo "<br>";
$x = new Person("Ram", 23, "I like to use bow and arrow");
$y = new Person("Shyam", 18, "I like build web application");
echo $x->showInterest();
echo "<br>";
echo "$x->name" . " has " . "$x->eye" . " eyes";
echo "<br>";
echo "$x->name" . " is " . "$x->skin" . ' color';
echo "<br>";
echo $y->showInterest();
echo "<br>";
echo "$y->name" . " has " . "$x->eye" . " eyes";
echo "<br>";
echo "$y->name" . " is " . "$x->skin" . ' color';
echo "<br>";
$indian_guy = new Person("Peter", 30, "Visiting club", "Brown");
echo "<br>";
echo $indian_guy->showInterest();
echo "<br>";
echo "$indian_guy->name" . " has " . "$indian_guy->eye" . " eyes";
echo "<br>";
echo "$indian_guy->name" . " is " . "$indian_guy->skin" . ' color';
echo "<br>";
