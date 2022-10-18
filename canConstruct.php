<?php 
$target="apple";
$wordBank= array("japan","nest","boom");

function canConstruct($target, $wordBank){
    if(strlen($target)==0){
        return true;
    }

    for ($i =0; $i<count($wordBank); $i++){
        //echo($wordBank[$i]);
        $splitString = str_split($wordBank[$i]);
        //print_r($splitString);
        for($j=0;$j<count($splitString);$j++){
            /*print_r($splitString[$j]);
            echo(" ");*/
            $pos = stripos($target,$splitString[$j]);
            //echo($pos);
            if($pos === 0){
                $suffix= substr($target,1);
                if(canConstruct($suffix,$wordBank)){
                    return true;
                }
            }
        }
    }

    return false;
}

$ans = canConstruct($target,$wordBank);
echo(var_dump($ans));

?>