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
http://stackoverflow.com/questions/3833876/create-associative-array-from-foreach-loop-php
Associative array in foreach statement:
*/
$six_sides = array();
  for ($side = 1; $side <= 6; $side++) {
      $six_sides[] = $side;
  }

echo 'print_r($six_sides) results in:<br>';
print_r($six_sides);


$five_items = array();
for ($die_number = 1; $die_number <= 5; $die_number++) {
  $five_items[] = $die_number;
}

echo '<br>print_r($five_items) results in:<br>';
print_r($five_items);


$all_dice = array();
  /*MAKE THIS A BUILDER, NOT A REVEALER
  $all_dice[]= ...*/
}

echo '<br>var_dump($all_dice) result is:<br>';
var_dump($all_dice);
?>
</div>
</body>
</html>
