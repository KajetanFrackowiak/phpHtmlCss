<?php

class Knapsack
{
    protected $capacity;
    protected $list = array();

    public function getList()
    {
        return $this->list;
    }

    function __construct($capacity)
    {
        $this->capacity = $capacity;
    }

    function addItem($item_to_list)
    {
        if ($this->getTotalWeight() + $item_to_list <= $this->capacity) {
            $this->list[] += $item_to_list;
            echo "Managed to insert the item into the list\n";
            return true;
        } else {
            echo "Failed to insert item into the list\n";
            return false;
        }
    }

    function delItem($thing_to_delete)
    {
        if (!empty($this->list)) {
            $key = array_search($thing_to_delete, $this->list);
            if ($key !== false) {
                array_splice($this->list, $key, 1);
                echo "Managed to remove the item from the list";
                return true;
            } else {
                echo "This thing is not in the list\n";
                return false;
            }
        } else {
            echo "The list is empty\n";
            return false;
        }
    }

    public function getTotalWeight()
    {
        $totalWeight = 0;
        foreach ($this->list as $item) {
            $totalWeight += $item->getWeight();
        }
        return $totalWeight;
    }
}

class TwoKnapsack extends Knapsack
{
    private $second_capacity;
    private $second_list = array();

    public function getSecondList()
    {
        return $this->second_list;
    }

    public function addItem($item_to_list)
    {
        if ($this->getTotalWeight() + $item_to_list->getWeight() <= $this->capacity || $this->getTotalWeight() + $item_to_list->getWeight() <= $this->second_capacity) {
            if ($this->getTotalWeight() + $item_to_list->getWeight() <= $this->capacity) {
                $this->list[] = $item_to_list;
                echo "Managed to insert the item into the first list\n";
                return true;
            } else {
                $this->second_list[] = $item_to_list;
                echo "Managed to insert the item into the second list\n";
                return true;
            }
        } else {
            echo "Failed to insert item into either list due to capacity constraints\n";
            return false;
        }

    }

    public function delItem($thing_to_delete)
    {
        if (!empty($this->list)) {
            $key = array_search($thing_to_delete, $this->list);
            if ($key !== false) {
                array_splice($this->list, $key, 1);
                echo "Managed to remove the item from the first list\n";
                return true;
            }
        }
        if (!empty($this->second_list)) {
            $key = array_search($thing_to_delete, $this->second_list);
            if ($key !== false) {
                array_splice($this->second_list, $key, 1);
                echo "Managed to remove the item from the second list\n";
                return true;
            }
        }
        echo "This thing is not in either list\n";
        return false;
    }

}
?>