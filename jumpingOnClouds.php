
<?php
/*Problem Statement:
There is a new mobile game that starts with consecutively numbered clouds. Some of the clouds are 
thunderheads and others are cumulus. The player can jump on any cumulus cloud having a number that 
is equal to the number of the current cloud plus  or . The player must avoid the thunderheads. 
Determine the minimum number of jumps it will take to jump from the starting postion to the last cloud. 
It is always possible to win the game.

For each game, you will get an array of clouds numbered  if they are safe or  if they must be avoided.

Example
c =[0,1,0,0,0,1,0]
Index the array from 0...6. The number on each cloud is its index in the list so the player must avoid 
the clouds at indices  and 5. They could follow these two paths: 0->2->4->6 or 0->2->3->4->6. The first 
path takes 3 jumps 
while the second takes 4. Return 3.
*/
//---------------------------------------------------------
/*Solution 1:
function jumpingOnClouds($c,$n) {
   // $start = 0;
    $jump = 0;
    $skip = 0;
    foreach($c as $key => $val) {
        if($skip == 1) {
            $skip = 0;
            continue;
        }
        if($key == ($n-1)){break;}
        if(($key+2 < $n) && ($c[$key+2] == 0)) {
           // $start = $key+2;
            $jump++;
            //$key = $key +2;
            $skip = 1;
        } else{
            //$start = $c[$key+1];
            $jump++;
            //$key++;
            $skip = 0;
        }
        
    }
    return $jump;
}
*/

// Complete the jumpingOnClouds function below.
function jumpingOnClouds($c,$n) {
    $jump = 0;
    for($i = 0; $i<$n; $i++ ) {
        if(($i+2) < $n && $c[$i+2] == 0) {
            $jump++;
            $i++;
            $i = ($i+2) < $n ? $i+2 : $i++;
        } else {
            $jump++;            
        }
    }
    
    return $jump;
}

$n = 7;
$c = [0,0,1,0,0,1,0];
$result = jumpingOnClouds($c,$n);
var_dump("Total jumps needed are: $result");
//Result: Total jumps needed are: 4
?>