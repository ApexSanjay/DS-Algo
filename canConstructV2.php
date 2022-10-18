<?php 
$target="apple";
$wordBank= array("pine","anaconda","love");
$map = new \Ds\Map();


function canConstruct($target, $wordBank, $map){
    if($map->hasKey($target)){
        echo(var_dump($map($target)));
        return $map($target);
    }
    
    //Base of the recursion
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
                if(canConstruct($suffix,$wordBank,$map)){
                    $map->put("target",true);
                    return true;
                }
            }
        }

    }
    $map->put("target",false);
    return false;
}

$ans = canConstruct($target,$wordBank,$map);
echo(var_dump($ans));

?>