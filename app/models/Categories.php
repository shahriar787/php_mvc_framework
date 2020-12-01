<?php


class Categories
{
    public function __construct()
    {
    }

    public function foodAction(){
       return array(
           'one' => 'Food',
           'two' => 'Drink',
           'three' => 'Chocolate'
       );
    }
}