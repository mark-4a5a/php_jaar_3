<?php
class Ball{
    private $color = '';

    public function __construct($color){
        $this->color = $color;
    }

    public function show(){
        return "<div class='ball $this->color'></div>";
    }
}
?>