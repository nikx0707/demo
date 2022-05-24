<?php

$n1=$_GET['num1'];
$n2=$_GET['num2'];

class Calculator 
{
    public $num1;
    public $num2;

    function __construct($num1,$num2)
    {
        $this-> n1 = $num1;
        $this-> n2 = $num2;
    }

    public function add()
    {
        $n = $this-> n1 + $this-> n2;
        echo " The Addition of $this->n1 And $this->n2 is : $n <br>";
    }

    public function sub()
    {
        $n = $this-> n1 - $this-> n2;
        echo " The Substraction of $this->n1 And $this->n2 is : $n <br>";
    }

    public function mul()
    {
        $n = $this-> n1 * $this-> n2;
        echo " The Multiplication of $this->n1 And $this->n2 is : $n <br>";
    }

    public function div()
    {
        $n = $this-> n1 / $this-> n2;
        echo " The Division of $this->n1 And $this->n2 is : $n <br>";
    }
}

$calc = new Calculator($n1,$n2);
$calc -> add();
$calc -> sub();
$calc -> mul();
$calc -> div();

?>