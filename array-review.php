<?php
/**
 * Created by PhpStorm.
 * User: Raine Padilla
 * Date: 1/15/2018
 * Time: 2:52 PM
 */

// Part 1
$animals = ['panda', 'alpaca', 'boa'];

printSort($animals);
addItem('goat', $animals);
printSort($animals);
addItem('boa', $animals);
printSort($animals);

function printSort($unsorted)
{
    sort($unsorted);
    echo '<p id="output">';

    foreach($unsorted as $item)
    {
        echo "$item";
    }
    echo '</p>';
}

function addItem($item, $array)
{
    if(!in_array($item, $array))
    {
        $array[] = $item;
        echo "Adding $item...";
    }
}

// Part 2
$cupcakeFlavors = ['grasshopper'=>'The Grasshopper', 'maple'=>'Whiskey Maple Bacon',
    'carrot'=>'Carrot Walnut', 'caramel'=>'Salted Caramel Cupcake', 'velvet'=>'Red Velvet',
    'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu'];