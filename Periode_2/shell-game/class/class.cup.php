<?php
class Cup{
    private $color = '';
    private $type = '';
    private $times = 3;
    private $cups = [];
    private $upDown = 'liftup';
    private $random = 0;

    public function __construct(){
        $this->color = 'yellow';
        $this->type = 'plastic';
        $this->random = rand(1, 3);

        for($i = 1; $i <= $this->times; $i++){
            array_push($this->cups, 'Cup' . $i);
        }
    }

    public function show(){
        $return = "<div class='cups'>";
        foreach ($this->cups as $value){
            if($value === "Cup" . $this->random){
                $return .= "<div class='cup yellow $this->upDown'> <div class='ball blue'></div> </div>";
            } else {
                $return .= "<div class='cup yellow $this->upDown'></div>";
            }
        }
        $return .= "<div class='clear'></div></div>";
        return $return;
    }

    public function click(){
        if($this->upDown === 'putdown'){
            $this->liftUp();
        }
        if($this->upDown === 'liftup'){
            $this->putDown();
        }
    }
    
    public function liftUp(){
        $this->upDown = 'liftup';
    }

    public function putDown(){
        $this->upDown = 'putdown';
    }
}
?>