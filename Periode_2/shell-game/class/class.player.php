<?php
class Player{
    private $name = '';
    private $amount = 0;

    public function __construct($name){
        $this->name = $name;
        $this->amount = 100;
    }

    public function show(){
        return "<div class='player'>
                    <strong> $this->name: $this->amount</strong>
                </div>";
    }
}
?>