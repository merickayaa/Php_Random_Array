<?php
echo "<pre>";
$planets = ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "", "", NULL];
print_r($planets);

function exam($arr,$num){
    $array = array_filter($arr, function($e){
        if($e != "") return $e;
    });
    $keys = array_rand($array,$num);
    print_r($keys);
    print_r($array);
    $randArray = array_map(function($m)use($array){
        return $array[$m];
    },$keys);
    return $randArray;
};

print_r(exam($planets,2));