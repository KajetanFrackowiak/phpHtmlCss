<?php
    interface Figura {
        public function area();
    }
    interface FlatFigure extends Figura {
        public function perimeter();
    }
    interface SpatialFigure extends Figura {
        public function volume();
    }

    class Sphere implements SpatialFigure {
        private $r;

        public function __construct($r) {
            if ($r <= 0) {
                throw new Exception("Podałeś liczbę nie większą niż zero !");
            }
            $this->r = $r;

        }

        public function volume() {
            echo (double)(4/3) * pi() * pow($this->r,3) . "\n";// TODO: Implement volume() method.
        }
        public function area()
        {
             echo  4 * pi() * pow($this->r, 2) . "\n";  // TODO: Implement area() method.
        }

    }
    class Square implements FlatFigure {
        private $x;
        public function __construct($x) {
            if ($x <= 0) {
                throw new Exception("Podano liczbę mniejszą lub równą zero!");
            }
            $this->x = $x;
        }

        public function perimeter() {

              echo 4 * $this->x;// TODO: Implement perimeter() method.
        }

        public function area()
        {
            echo pow($this->x, 2);       // TODO: Implement area() method.
        }
    }
?>