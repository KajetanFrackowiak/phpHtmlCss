<?php
interface Operation {
     function addition($numerator, $denominator);
     function subtraction($numerator, $denominator);
     function multiplication($numerator, $denominator);
     function division($numerator, $denominator);
}
trait Compare {
    private function check($first, $second) {
        if ($first < $second) {
            return -1;
        }
        if ($first > $second) {
            return 1;
        }
        else {
            return 0;
        }
    }
}

class Fraction implements Operation {
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator)
    {
        if ($denominator <= 0) {
            throw new Exception("Podano mianownik mniejszy od zera lub równy zeru!");
        }
        $this->numerator = $numerator;
        $this->denominator =$denominator;
    }

    public function setNumerator($numerator) {
        $this->numerator = $numerator;
    }
    public function getNumerator() {
        return $this->numerator;
    }
    public function setDenominator($denominator) {
        $this->denominator = $denominator;
    }
    public function getDenominator() {
        return $this->denominator;
    }

    private function gcd($num1, $num2) {
        while ($num2 != 0) {
            $temp = $num2;
            $num2 = $num1 % $num2;
            $num1 = $temp;
        }
        return abs($num1);
    }
    public function fraction_reduction() {
        $gcd = $this->gcd($this->numerator, $this->denominator);
        $this->numerator /= $gcd;
        $this->denominator /= $gcd;
    }

    use Compare;
    public function compareFractions($numerator1, $denominator1) {
        $result = $this->check($numerator1, $denominator1);
        return $result;
    }

    public function addition($numerator1, $denominator1)
    {
        $numerator = $this->numerator + $numerator1;
        $denominator = $this->denominator + $denominator1;
        return "$numerator/$denominator";
    }
    public function subtraction($numerator1, $denominator1)
    {
        $numerator = $this->numerator - $numerator1;
        $denominator = $this->denominator - $denominator1;
        return "$numerator/$denominator";
    }
    public function multiplication($numerator1, $denominator1)
    {
        $numerator = $this->numerator * $numerator1;
        $denominator = $this->denominator * $denominator1;
        return "$numerator/$denominator";
    }
    public function division($numerator1, $denominator1)
    {
        $numerator = $this->numerator / $numerator1;
        $denominator = $this->denominator / $denominator1;
        return "$numerator/$denominator";
    }
}

$obj = new Fraction(2,8);
echo $obj->compareFractions(3,9);
?>