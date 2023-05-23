<?php
class A
{
    //przyjmuje jako argument obiekt i zwraca metody tego obiektu
    public function getCallableMethods($obj)
    {
        $methods = [];
        $reflection = new ReflectionObject($obj);
        $classMethods = $reflection->getMethods(ReflectionMethod::IS_PUBLIC);

        foreach ($classMethods as $method) {
            if ($method->isStatic() || $method->isConstructor()) {
                continue;
            }
            $methods[] = $method->getName();
        }
    }
    //przyjmuje jako argument obiekt i zwraca listę rodziny (przodków) tego obiektu na przykład A->B->C->D (wywołanie było dla obiektu klasy D)
    public function getLineage($obj) {
        $lineage = [];
        $reflection = new ReflectionClass($obj);

        while ($parent = $reflection->getParentClass()) {
            $lineage = $parent->getName();
            $reflection = $parent;
        }

        return implode('->', array_reverse($lineage));
    }

    //przyjmuje jako argument obiekt i zwraca nazwy obiektów potomnych danej klasy
    public function getChildClasses($obj) {
        $childClasses = [];
        $className = get_class($obj);
        $reflection = new ReflectionClass($className);
        $subClasses = $reflection->getParentClass();

        foreach ($subClasses as $subClass) {
            $childClasses = $subClass->getName();
        }
    return $childClasses;
    }

    //przyjmuje jako argument obiekt i zwraca właściwości danego obiektu
    public function getProperties($obj) {
        $properties = [];
        $reflection = new ReflectionClass($obj);
        $classProperties = $reflection->getProperties();

        foreach ($classProperties as $property) {
            $propertyName = $property->getName();
            $properties[$propertyName] = $property->getValue($obj);
        }
        return $properties;
    }

    //przyjmuje jako argument obiekt i zwraca w postaci pliku HTML informacje o danym obiekcie korzystając z wyżej wymienionych funkcji
    public function printObjectInfo($obj) {
        $output = '<html>';
        $output .= '<head><title>Object Infomation</title></head>';
        $output .= '<body>';

        $methods = $this->getCallableMethods($obj);
        $output .= '<h2>Callable Methods:</h2>';
        $output .= '<ul>';
        foreach ($methods as $method) {
            $output .= '<li>' . $method . "</li>";
        }
        $output .= '</ul>';

        $lineage = $this->getLineage($obj);
        $output .= '<h2>Lineage:</h2>';
        $output .= '<p>' . $lineage . '</p>';

        $childClasses = $this->getChildClasses($obj);
        $output .= '<h2>Child Classes:</h2>';
        $output .= '<ul>';
        foreach ($childClasses as $childClass) {
            $output .= '<li>' . $childClass . "</li>";
        }
        $output .= '</ul>';

        $properties = $this->getProperties($obj);
        $output .= '<h2>Properties:';
        $output .= '<ul>';
        foreach ($properties as $propierty) {
            $output .= '<li>' . $propierty . '</li>';
        }
        $output .= '</ul>';

        $output .= '</body>';
        $output .= '</html>';

        echo $output;
    }
}
?>