<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All About Arrays</title>
</head>
<body>
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

ASSOCIATIVE
foreach ($array as $die => $value) {
  # code...
}
INDEX
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
http://stackoverflow.com/questions/3833876/create-associative-array-from-foreach-loop-php
Associative array in foreach statement:

foreach($all_dice as $field => $value) {
  $all_dice[$field]=$value;
}

Output:
Array(
$field => $value,
$field => $value
...
);

*/


$all_dice = array();
  for ($i = 1; $i <= 5; $i++) {
    $all_dice['die'.$i] = array(
      for ($s = 1; $s <= 6; $s++) {
        $all_dice['die'.$i][] = $s;
      }
    );
/*  for ($i = 1; $i <= 6; $i++) {
  $all_dice['die'.$i] = $i;
}*/
}
print_r($all_dice);
//$all_dice[] = array('die$i' => 'array of 6 items'); ?>
</div>
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
/*global $all_dice;
$all_dice = array(
  'die1' => array( 1, 2, 3, 4, 5, 6 ),
  'die2' => array( 6, 5, 4, 3, 2, 1 ),
  'die3' => array( 2, 4, 6, 1, 3, 5 ),
  'die4' => array( 1, 3, 5, 2, 4, 6 ),
  'die5' => array( 6, 4, 2, 1, 3, 5 ),
);*/
?>
</body>
</html>
