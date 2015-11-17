<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All About Arrays</title>
</head>
<body>
  <div>
  <a href="index.php">Home</a><br>
  <a href="extraCredit.php">Extra Credit</a><br>
  <a href="complexDice.php">Complex Dice</a><br>
  <a href="randomDice.php">Random Dice</a><br>
<h1>Random Extra Credit</h1>
<?php
/*
Extra Credit:
1. Build $all_dice array programatically
2. Associative array should have 5 dice (die1...die5), but the only string used in source code should be "die"
3. Each die will be an indexed array containing numbers 1-6, in random order, containing no duplicates

ASSOCIATIVE
foreach ($array as $key => $value) {
# code...
}
OR
foreach (array_expression as $value) {
}

INDEX
for ($i = 1; $i <= 10; $i++) {
echo $i;
}
*/
$all_dice = array();
for ( $d = 1; $d <= 5; $d++ ) {
  if ( $d % 2 !== 0 ) {
    // it is odd
    for ( $s = 1; $s <= 6; $s++ ) {
      $all_dice['die' . $d][] = $s;
    }
  } else {
    // it is even
    for ( $s = 6; $s >= 0; $s-- ) {
      $all_dice['die' . $d][] = $s;
    }
  }
}
echo('<pre>');
print_r( $all_dice );
echo('</pre>');
?>
</div>
</body>
</html>
