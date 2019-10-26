<?php

//Create Inventory Class
//
//There should be add item method which can add the new item and 
//qty into the list property
//
//There should be a sale method which will 
//reduce the qty of the item

class Inventory
{
    private $item_list = [];

    function addItem(string $item_name, int $qty)
    {
        $new_item = $this->buildItem($item_name, $qty);
        array_push($this->item_list, $new_item);
        //var_dump($this->item_list);
    }

    private function buildItem(string $item_name, int $qty)
    {
        return ['name' => $item_name, 'qty' => $qty];
    }

    function saleItem(string $item_name, int $sold_qty)
    {
        //Search in the $item_list array with the $item_name
        $name_array = array_column($this->item_list, 'name');
        var_dump($name_array);
        $index = array_search($item_name, $name_array);

        if ($index !== false) {
            //Reduce the qty
            //Update in the $item_list array
            $this->item_list[$index]['qty'] -= $sold_qty;
        }
        var_dump($this->item_list);
    }
}


$inventory = new Inventory();
$inventory->addItem('orange', 20);
$inventory->addItem('apple', 10);
$inventory->saleItem('orange3', 5);
