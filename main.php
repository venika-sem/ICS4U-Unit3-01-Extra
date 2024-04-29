<?php
  /* This program reverses a string
  * *By Venika Sem
  * *@version 1.0
  * *@since Feb-2024
  */
  
  // reverse the string using recursion
  function reverseString($stringToReverse) {
      if ($stringToReverse === '') {
          return '';
      } else {
          $firstChar = $stringToReverse[0];
          $restOfString = substr($stringToReverse, 1);
          return reverseString($restOfString) . $firstChar;
      }
  }
  
  $aString = "recursion";
  $anotherString = "racecar";
  $thirdString = "hello";
  
  echo "The reverse of $aString is " . reverseString($aString) . "\n";
  echo "The reverse of $anotherString is " . reverseString($anotherString) . "\n";
  echo "The reverse of $thirdString is " . reverseString($thirdString) . "\n";
  
  echo "\nDone.\n";
?>
