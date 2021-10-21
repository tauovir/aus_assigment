<?php 
function search($array, $key, $value) { 
    $results = array(); 
    if (is_array($array)) { 
        if (isset($array[$key]) && $array[$key] == $value) { 
            $results[] = $array; 
        } 
        foreach ($array as $subarray) { 
            $results = array_merge($results,  
            search($subarray, $key, $value)); 
        } 
    } 
    return $results; 
} 
    $res = search($ary, 'c_code', $countryCode); 
    foreach ($res as $var) { 
        $phonecode = $var["code"]; 
    } 
  
?> 