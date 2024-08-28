<?php
function countVowelsInString($string) {
    $vowelCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];

    // Loop through each character in the string
    for ($i = 0; $i < strlen($string); $i++) {
        // Check if the character is a vowel
        if (in_array($string[$i], $vowels)) {
            $vowelCount++;
        }
    }

    return $vowelCount;
}

function reverseString($string) {
    return strrev($string);
}

function processStrings($array) {
    foreach ($array as $string) {
        $vowelCount = countVowelsInString($string);
        $reversedString = reverseString($string);
        echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
    }
}

// Example usage:
$arrayOfStrings = ["Hello", "World", "PHP", "Programming"];

processStrings($arrayOfStrings);

