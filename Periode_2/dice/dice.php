<?php
class Dices{
    protected $number = null;
    protected $diceImage = ['-dice-one.png', '-dice-two.png', '-dice-three.png', '-dice-four.png', '-dice-five.png', '-dice-six.png'];

    public function generateNumber(){
        return rand(0,5);
    }

    public function getNumber(){
        //Returns the number.
        return $this->number;
    }
}
class DiceNormal extends Dices{
    private $diceType = "normal";

    public function roll(){
        //Makes a random number and shows the related pictures with it.
        $this->number = $this->generateNumber();
        return $this->diceType . $this->diceImage[$this->number];
    }
}
class DiceInverted extends Dices{
    private $diceType = "inverted";

    public function roll(){
        //Makes a random number and shows the related pictures with it.
        $this->number = $this->generateNumber();
        return $this->diceType . $this->diceImage[$this->number];
    }
}
class DicePerspective extends Dices{
    private $diceType = "perspective";
    
    public function roll(){
        //Makes a random number and shows the related pictures with it.
        $this->number = $this->generateNumber();
        return $this->diceType . $this->diceImage[$this->number];
    }
}
?>