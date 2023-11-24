<?php

class Point
{
    private $x;
    private $y;

    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function GetX($x)
    {
        return $this->x;

    }

    public function GetY($y)
    {
        return $this->y;
    }

    public function SetX($x)
    {
        return $this->x = $x;
    }

    public function SetY($y)
    {
        return $this->y = $y;
    }

    public function shift($x, $y) {
        $this->x += $x;
        $this->y += $y;
    }
    public function distance($x, $y) {
        if ($x >= $y) {
            $x - $y;
        } else {
            $y - $x;
        }
    }
    public function __toString() {
        return "(" . $this->x . ", " .$this->y . ")";
    }
}
$point1 = new Point(3, 5);
echo $point1->__toString();
?>