<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All About Arrays</title>
</head>
<body>
<?php
// Each die could be an index array
/*
  $die1 = array(1,2,3,4,5,6);
  $die2 = array(1,2,3,4,5,6);
  $die3 = array(1,2,3,4,5,6);
  $die4 = array(1,2,3,4,5,6);
  $die5 = array(1,2,3,4,5,6);
  */
// An associative array of 5 index arrays for all the dice togather
$all_dice = array(
  'die1' => array( 1, 2, 3, 4, 5, 6 ),
  'die2' => array( 6, 5, 4, 3, 2, 1 ),
  'die3' => array( 2, 4, 6, 1, 3, 5 ),
  'die4' => array( 1, 3, 5, 2, 4, 6 ),
  'die5' => array( 6, 4, 2, 1, 3, 5 ),
);
?>
<div>
  <h1>Iteration 1 (In order keys, in order values):</h1>
<?php
// Each die is an index array, odds in ascending order, evens in descending order

foreach ($all_dice as $key => $value) {
  echo $key . ' = ( '. implode(', ',$value) . ' )<br>';
}
?>
</div>
<div>
  <h1>Iteration 2 (In order keys, in reverse order values):</h1>
<?php
foreach ($all_dice as $key => $value) {
  echo $key;
  echo ' = ( ';
  foreach ($value as $side) {
    echo $side;
    echo ', ';
  }
  echo ' )<br>';
}
?>
</div>
<div>
  <h1>Iteration 3 (In reverse order keys, in order values):</h1>
<?php
$all_dice = array_reverse($all_dice);
foreach ($all_dice as $key => $value) {
  echo $key;
  echo ' = (';
  print_r($value);
  echo ')<br>';
}
?>
</div>
<div>
  <h1>Iteration 4 (in reverse order keys, in reverse order values):</h1>
<?php
array_reverse($all_dice);
foreach ($all_dice as $key => $value) {
  echo $key;
  echo ' = (';
  print_r(array_values(array_reverse($value)));
  echo ')<br>';
}
?>
</div>
<div>
<h1>Extra Credit</h1>
<?php
/*
Extra Credit:
1. Build $all_dice array programatically
2. Associative array should have 5 dice (die1...die5), but the only string used in source code should be "die"
3. Each die will be an indexed array containing numbers 1-6, containing no duplicates
4. Each odd die should have in order sequence 1...6
5. Each even die should have in reverse order sequence 6...1
*/
?></div>
</body>
</html>
