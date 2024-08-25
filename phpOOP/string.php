<?php
$strings = ["Hello", "World", "PHP", "Programming"];

 function strFormat($strings){
    $vowels = ["a", "e", "i", "o", "u"];
    $count =0;
    foreach ($strings as $str){
        
        for ($i=0; $i<strlen($str); $i++){
            if (in_array($str[$i], $vowels)){
                $count++;
            }
                   
        }
        $rev = strrev($str);
       echo "Original String: {$str}, Vowel Count:{$count}, Reversed String: {$rev}\n"; 
    }
    
 }

 print_r(strFormat($strings));

