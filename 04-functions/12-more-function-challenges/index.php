<?php
/*
  Challenge 1: Fahrenheit to Celsius
  Create a function called `fahrenheitToCelsius` that takes a Fahrenheit temperature as an argument. Return the temperature converted to Celsius.

  The formula to convert Fahrenheit to Celsius is: Celsius = (Fahrenheit - 32) * 5/9
*/
// Easier version
$fahrenheitToCelsius = fn ($Fehrenheit) => $Fehrenheit . " &deg;F = " . ($Fehrenheit - 32) * 5 / 9 . " &deg;C";

echo '<br>';
echo $fahrenheitToCelsius(12);

/*
  Challenge 2: Print names in uppercase
  Create a function called `printNamesToUpperCase` that takes an array of names as an argument. The function should loop through the array and print each name to the screen in uppercase letters.
*/
$printNamesToUpperCase = function ($arr) {
  if(count($arr) > 0) {
    foreach($arr as $name) {
      echo strtoupper($name) . "<br>";
    } 
  } else {
    echo "The array is empty";
  }
};

echo '<br>';
$printNamesToUpperCase(['tahir', 'peter']);

/*
  Challenge 3: Find the longest word
  1. Create a function called `findLongestWord` that takes a sentence as an argument.
  2. The function should return the longest word in the sentence.
  3. The output should look like this:
*/

function findLongestWord($string) {
  // echo $string[0];
  // convert the string to an array 
  $strArr = explode(' ', $string);

  $LongestWord = $strArr[0];

  foreach($strArr as $str) {
    if(strlen($str) > strlen($LongestWord)) {
      $LongestWord = $str;
    }
  }

  return $LongestWord;
}

// echo findLogestWord("Hello everyone I am tahir");
$sentence = 'The quick brown fox jumped over the lazy dog';
$longestWord = findLongestWord($sentence);
echo $longestWord;
