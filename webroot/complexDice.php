<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All About Arrays</title>
</head>
<body>
<?php
// Each die could be an index array of dice with any number of sides
/*
  $die1 = array(1,2,3,4,5,6,'x');
  $die2 = array(1,2,3,4,5,6,'x');
  $die3 = array(1,2,3,4,5,6,'x');
  $die4 = array(1,2,3,4,5,6,'x');
  $die5 = array(1,2,3,4,5,6,'x');
  */
// An associative array of any number of index arrays for all the dice togather
global $complex_dice;
$complex_dice = array(
  'die1' => array( 1, 2, 3, 4 ),
  'die2' => array( 6, 5, 4, 3, 2, 1 ),
  'die3' => array( 2, 4, 6, 1, 3, 5 ),
  'die4' => array( 1, 3, 5, 2, 4, 6 ),
  'die5' => array( 6, 4, 2, 1, 3, 5 ),
  'die6' => array( 1,2,3,4,5,6,7,8 )
);
// WHAT IF? VARIABLE NUMBR OF SIDES? VARIABLE NUMBER OF DIE? foreach and for with count(array)
?>
<div>
  <a href="index.php">Home</a><br>
  <a href="extraCredit.php">Extra Credit</a><br>
  <a href="complexDice.php">Complex Dice</a><br>
  <a href="randomDice.php">Random Dice</a><br>
  <h1>Iteration 1 (In order keys, in order values):</h1>
<?php
foreach ($complex_dice as $key => $value) {
  echo $key . ': ';
    for ( $i = 0; $i < count($complex_dice[$key]); $i++ ) {
      if ($i !==(count($complex_dice[$key])-1)) {
        echo $complex_dice[$key][$i] . ', ';
      } else {
        echo $complex_dice[$key][$i] . ' ';
      }
    }
  echo '<br>';
}
?>
</div>
<div>
  <h1>Iteration 2 (In order keys, in reverse order values):</h1>
<?php
foreach ($complex_dice as $key => $value) {
  echo $key . ': ';
    for ( $i = count($complex_dice[$key])-1; $i >= 0; $i-- ) {
      if ($i !==0) {
        echo $complex_dice[$key][$i] . ', ';
      } else {
        echo $complex_dice[$key][$i] . ' ';
      }
    }
  echo '<br>';
}
?>
</div>
<div>
  <h1>Iteration 3 (In reverse order keys, in order values):</h1>
<?php
foreach (array_reverse( $complex_dice, true) as $key => $side ) {
  echo $key . ': ';
    for ( $i = 0; $i < count($complex_dice[$key]); $i++ ) {
      if ($i !==(count($complex_dice[$key])-1)) {
        echo $complex_dice[$key][$i] . ', ';
      } else {
        echo $complex_dice[$key][$i] . ' ';
      }
    }
  echo '<br>';
}
?>
</div>
<div>
  <h1>Iteration 4 (In reverse order keys, in reverse order values):</h1>
<?php
foreach (array_reverse($complex_dice) as $key => $value) {
  echo $key . ': ';
    for ( $i = count($complex_dice[$key])-1; $i >= 0; $i-- ) {
            if ($i !==0) {
        echo $complex_dice[$key][$i] . ', ';
      } else {
        echo $complex_dice[$key][$i] . ' ';
      }
    }
  echo '<br>';
}
?>
</div>
</body>
</html>
