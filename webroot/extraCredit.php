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

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

*/
// Loop to make 5 die
for ($i = 1; $i <= 5; $i++) {
   $array[] = 'die' . $i;
    echo '<br>';
}
print_r($array);
/*$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}
// $arr is now array(2, 4, 6, 8)
unset($value); // break the reference with the last element*/

?>
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
