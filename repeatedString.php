<?php
/*
Problem statement : 
There is a string, , of lowercase English letters that is repeated infinitely many times. Given an 
integer, , find and print the number of letter a's in the first  letters of the infinite string.

Example
s = 'abcac'
n = 10
The substring we consider is 'abcacabcac', the first 10 characters of the infinite string. There are 4 occurrences of 
a in the substring.
*/
function repeatedString($s, $n) {
    
    $len = strlen($s); 
    $countInSingleStr = substr_count($s,'a');
    $repeat = floor($n/$len);
    $extra = $n%$len;
    $extraStr = substr($s,0,$extra);
    $countInExtraStr = substr_count($extraStr,'a');
    $occurrence =  ($countInSingleStr * $repeat) + $countInExtraStr; 
    return $occurrence;
}
$result = repeatedString('abcac',10);
var_dump("Occurrence of 'a' in given string is $result times.");
?>