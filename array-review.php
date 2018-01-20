<?php
/**
 * Created by PhpStorm.
 * User: RMartin
 * Date: 1/16/2018
 * Time: 5:52 PM
 */

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
