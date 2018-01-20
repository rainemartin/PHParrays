<?php
/**
 * Created by PhpStorm.
 * User: RMartin
 * Date: 1/16/2018
 * Time: 5:52 PM
 */

$animals = ['panda', 'alpaca', 'boa'];


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