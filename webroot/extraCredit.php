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
