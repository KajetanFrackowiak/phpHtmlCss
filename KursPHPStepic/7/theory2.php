<?php
class Person
{
    public $age;
    public function __construct() {
        $this->age = 0;
    }
    public function incrementAge() {
        $this->age += 1;
        $this->ageChanged();
    }
    protected function decrementAge() {
        $this->age -= 1;
        $this->ageChanged();;
    }
    private function ageChanged() {
        echo "Age changed to {$this->age}\n";
    }

    public $name = '';
    function getName() {
        return $this->name;
    }
    function setName ($newName) {
        $this->name = $newName;
    }
}

class SupernaturalPerson extends Person {
    public function inSupernatural() {
        $this->decrementAge();
    }
}

$person = new Person();
echo $person->age . "\n";
$person->incrementAge();
$person1 = new SupernaturalPerson();
echo $person1->inSupernatural();
$person1-> incrementAge();
?>


<?php
class HTMLStuff {
    static function startTable() {
        echo "<table border=\"1\">\n";
    }
    static function endTable() {
        echo "</table>\n";
    }
}
HTMLStuff::startTable();
HTMLStuff::endTable();
?>
