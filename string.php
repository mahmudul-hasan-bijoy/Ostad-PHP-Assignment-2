<?php
$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($string)
{
    $vowels = ["a", "e", "i", "o", "u"];
    $count = 0;

    foreach (str_split(strtolower($string)) as $character) {
        if (in_array($character, $vowels)) {
            $count++;
        }
    }
    return $count;
}

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = strrev($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}