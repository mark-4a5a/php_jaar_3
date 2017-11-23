<?php
class Sum{
    protected $input = [];
    protected $answer = null;


    public function __construct(array $input){
        $this->input = $input;
        $this->answer = $this->input[0];
    }

    public function getA(){
        return $this->a;
    }

    public function getB(){
        return $this->b;
    }
}

class Add extends Sum{
    public function addSum(){
        foreach ($this->input as $key => $value) {
            if($key < 1) continue;
            $this->answer += $value;
        }
        return $this->answer;
    }
}

class Minus extends Sum{
    public function minusSum(){
        foreach ($this->input as $key => $value) {
            if($key < 1) continue;
            $this->answer = $this->answer - $value;
        }
        return $this->answer;
    }
}

class Multiply extends Sum{
    public function multiplySum(){
        foreach ($this->input as $key => $value) {
            if($key < 1) continue;
            $this->answer *= $value;
        }
        return $this->answer;
    }
}
?>