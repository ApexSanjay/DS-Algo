<?php

$target = 498;
$numbers = [2,3];

function TwoSum($target,$numbers){
    $table = array_fill(0,$target+1,"null");
    $table[0] = array();

    for ($i=0; $i<$target; $i++){
        if ($table[$i] !="null"){
            for($j=0; $j<count($numbers); $j++){
                $table[$i+$numbers[$j]] = array($i,$numbers[$j]);    
                
            }
        }
    }
    return $table[$target];
}

$ans = TwoSum($target,$numbers);
echo(var_dump($ans));
?>
