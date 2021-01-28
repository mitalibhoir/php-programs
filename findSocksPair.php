<?php
/*
Problem statement:
There is a large pile of socks that must be paired by color. Given an array of integers representing the 
color of each sock, determine how many pairs of socks with matching colors there are.

Example
n = 7
ar = [1,2,1,2,1,3,2]

There is one pair of color  and one of color . There are three odd socks left, one of each color. 
The number of pairs is .
*/
function sockMerchant($n, $ar) {
    $pair = 0;
    $individual_count = array_count_values($ar);
    foreach($individual_count as $key => $val) {
        if($val%2 == 0) {
            $pair += $val/2;
        } elseif($val%2 == 1 && $val>2) {
            $pair += intval($val/2);
        }
    }
    return $pair;    
}

$n = 7;
$ar = [1,2,1,2,1,3,2];
$result = sockMerchant($n,$ar);
var_dump("Possible pair of socks: $result");
?>