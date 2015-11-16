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
global $all_dice;
$all_dice = array(
  'die1' => array( 1, 2, 3, 4, 5, 6 ),
  'die2' => array( 6, 5, 4, 3, 2, 1 ),
  'die3' => array( 2, 4, 6, 1, 3, 5 ),
  'die4' => array( 1, 3, 5, 2, 4, 6 ),
  'die5' => array( 6, 4, 2, 1, 3, 5 ),
);
// WHAT IF? VARIABLE NUMBR OF SIDES? VARIABLE NUMBER OF DIE? foreach and for with count(array)
?>
<div>
  <a href="extraCredit.php">Extra Credit</a>
  <h1>Iteration 1 (In order keys, in order values):</h1>
<?php
for ( $i = 1; $i < 6; $i++ ) {
  echo 'die' . $i . ' = ( ';
  for ( $side = 0; $side <= 5; $side++ ) {
    echo $all_dice['die' . $i][$side] . ', ';
  }
  echo ' )<br>';
}
/* cheater cheater pumpkin eater
foreach ( $all_dice as $key => $value ) {
  echo $key . ' = ( '. implode( ', ', $value ) . ' )<br>';
}*/
?>
</div>
<div>
  <h1>Iteration 2 (In order keys, in reverse order values):</h1>
<?php
foreach ($all_dice as $key => $value) {
  echo $key . ' = ( ';
    // $comma = '';
    for ( $i = 5; $i >= 0; $i-- ) {
      // echo $all_dice['die1'][2];
      echo $all_dice[$key][$i] . ', ';
    }
  echo ' )<br>';
}
?>
</div>
<div>
  <h1>Iteration 3 (In reverse order keys, in order values):</h1>
<?php
foreach (array_reverse($all_dice) as $key => $value) {
  echo $key . ' = ( ';
    // $comma = '';
    for ( $i = 0; $i < 6; $i++ ) {
      // echo $all_dice['die1'][2];
      echo $all_dice[$key][$i] . ', ';
    }
  echo ' )<br>';
}
?>
</div>
<div>
  <h1>Iteration 4 (In reverse order keys, in reverse order values):</h1>
<?php
foreach (array_reverse($all_dice) as $key => $value) {
  echo $key . ' = ( ';
    // $comma = '';
    for ( $i = 5; $i >= 0; $i-- ) {
      // echo $all_dice['die1'][2];
      echo $all_dice[$key][$i] . ', ';
    }
  echo ' )<br>';
}
?>
</div>
</body>
</html>
