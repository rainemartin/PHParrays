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
addString("goat", $animals);
printSort($animals);
addString("boa", $animals);
printSort($animals);

function printSort($unsorted)
{
    sort($unsorted);
    echo '<p id="output">';

    foreach($unsorted as $item)
    {
        echo "$item ";
    }
    echo '</p>';
}

function addString($item, $array)
{
    echo "Adding $item...";
    if(!in_array($item, $array))
    {
        $array[] = $item;
    }
}

// Part 2
$cupcakeFlavors = ['grasshopper'=>'The Grasshopper', 'maple'=>'Whiskey Maple Bacon',
    'carrot'=>'Carrot Walnut', 'caramel'=>'Salted Caramel Cupcake', 'velvet'=>'Red Velvet',
    'lemon'=>'Lemon Drop', 'tiramisu'=>'Tiramisu'];

displayCheckbox($cupcakeFlavors);

function displayCheckbox($array)
{
    echo '<p id="output2">';
    foreach ($array as $key => $value)
    {
        echo "<input type='checkbox' name='flavors[]' value='$key'> $value<br>";
    }
}