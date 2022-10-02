<?php

class CustomMathClass{
    private $a,$b;

    function __construct($a,$b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function getA()
    {
        return $this->a;
    }

    public function setA($a)
    {
        $this->a = $a;
    }


    public function getB()
    {
        return $this->b;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    public function mult(){
        if(isset($this->a)&&isset($this->b))
        return $this->a*$this->b;
        else
            {
                echo "Значений не существует <br>";
            return 0;
        }

    }

    public function sum(){
        if(isset($this->a)&&isset($this->b))
        return $this->a+$this->b;
        else
        {
            echo "Значений не существует <br>";
            return 0;
        }
    }

    public function div(){
        if(isset($this->a)&&isset($this->b))
        return $this->a/$this->b;
        else
            {
                echo "Значений не существует <br>";
                return 0;
            }
    }

    public function clear(){
        unset($this->a,$this->b);
    }
}

$math_obj = new CustomMathClass(9,3);
echo $math_obj ->div() . "<br>";
echo $math_obj ->sum(). "<br>";
echo $math_obj ->mult(). "<br>";
echo $math_obj ->clear(). "<br>";
echo $math_obj ->sum(). "<br>";
