<?php
trait Counter {
    private static $num = 0;
    public function inc() {
        self::$num++;
    }
    public static function number() {
        return self::$num;
    }
}

class MyClass {
    use Counter;
}

class MySecondClass {
    use Counter;
}

$obj1 = new MyClass();
$obj1->inc();
$obj1->inc();
$obj1->inc();

$obj2 = new MyClass();
$obj2->inc();

$obj3 = new MySecondClass();
$obj3->inc();

echo "Number of objects  by MyClass: " . Myclass::number() . "\n";
echo "Number of objects by MySecondClass: " . MySecondClass::number() . "\n";
?>