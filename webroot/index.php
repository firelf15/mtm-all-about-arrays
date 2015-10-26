<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>All About Arrays</title>
  <link rel="stylesheet" href="stylesheets/app.css"/>
  <script src="bower_components/modernizr/modernizr.js"></script>
</head>
<body>
<div class="row">
  <div class="large-12 columns">
    <h1>All About Arrays</h1>
  </div>
</div>

<div class="row">
  <div class="large-12 columns">
    <div class="panel">
      <h3>Not Yahtzee!</h3>

      <p>Given 5 6-sided dice.</p>

      <p>
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
        /*$all_dice = array(
					'die1' => array( 1, 2, 3, 4, 5, 6 ),
					'die2' => array( 6, 5, 4, 3, 2, 1 ),
					'die3' => array( 2, 4, 6, 1, 3, 5 ),
					'die4' => array( 1, 3, 5, 2, 4, 6 ),
					'die5' => array( 6, 4, 2, 1, 3, 5 ),
				);*/

        // Use loops to build the indexed arrays above
        $die1 = array();
        $die2 = array();
        $die3 = array();
        $die4 = array();
        $die5 = array();
        // Build the array for $die1
        for ( $i = 1; $i < 7; ++ $i ) {
          array_push( $die1, $i );
        }
        // Build the array for $die2
        for ( $i = 1; $i < 7; ++ $i ) {
          array_unshift( $die2, $i );
        }
        // Build the array for $die3
        for ( $i = 2; $i < 7; $i += 2 ) {
          array_push( $die3, $i );
        }
        for ( $i = 1; $i < 7; $i += 2 ) {
          array_push( $die3, $i );
        }
        // Build the array for $die4
        for ( $i = 1; $i < 7; $i += 2 ) {
          array_push( $die4, $i );
        }
        for ( $i = 2; $i < 7; $i += 2 ) {
          array_push( $die4, $i );
        }
        // Build the array for $die5
        for ( $i = 1; $i < 7; $i += 2 ) {
          array_push( $die5, $i );
        }
        for ( $i = 2; $i < 7; $i += 2 ) {
          array_unshift( $die5, $i );
        }
        $all_dice = array( $die1, $die2, $die3, $die4, $die5 );

        ?></p>

      <div class="row">
        <div class="large-4 medium-4 columns">
          <h2>Roll all the dice for Turn 1</h2>

          <h3>Code written out for each of 5 dice</h3>
          <?php
          $t1_d1 = $all_dice[0];
          $die1  = array_rand( $t1_d1 );
          echo 'Turn 1, Die 1: ' . $t1_d1[ $die1 ] . '<br>';
          $t1_d2 = $all_dice[1];
          $die2  = array_rand( $t1_d2 );
          echo 'Turn 1, Die 2: ' . $t1_d2[ $die2 ] . '<br>';
          $t1_d3 = $all_dice[2];
          $die3  = array_rand( $t1_d3 );
          echo 'Turn 1, Die 3: ' . $t1_d3[ $die3 ] . '<br>';
          $t1_d4 = $all_dice[3];
          $die4  = array_rand( $t1_d4 );
          echo 'Turn 1, Die 4: ' . $t1_d4[ $die4 ] . '<br>';
          $t1_d5 = $all_dice[4];
          $die5  = array_rand( $t1_d5 );
          echo 'Turn 1, Die 5: ' . $t1_d5[ $die5 ] . '<br>';
          echo '<p>Now assign to the variable $turn1, all the results in an array.</p>';
          $turn1 = array( $t1_d1[ $die1 ], $t1_d2[ $die2 ], $t1_d3[ $die3 ], $t1_d4[ $die4 ], $t1_d5[ $die5 ] );
          var_dump( $turn1 );
          ?>
        </div>
        <div class="large-4 medium-4 columns">
          <h2>Roll all the dice for Turn 2</h2>

          <h3>Code written out for each of 5 dice</h3>
          <?php
          $t2_d1 = $all_dice[0];
          $die1  = array_rand( $t2_d1 );
          echo 'Turn 2, Die 1: ' . $t2_d1[ $die1 ] . '<br>';
          $t2_d2 = $all_dice[1];
          $die2  = array_rand( $t2_d2 );
          echo 'Turn 2, Die 2: ' . $t2_d2[ $die2 ] . '<br>';
          $t2_d3 = $all_dice[2];
          $die3  = array_rand( $t2_d3 );
          echo 'Turn 2, Die 3: ' . $t2_d3[ $die3 ] . '<br>';
          $t2_d4 = $all_dice[3];
          $die4  = array_rand( $t2_d4 );
          echo 'Turn 2, Die 4: ' . $t2_d4[ $die4 ] . '<br>';
          $t2_d5 = $all_dice[4];
          $die5  = array_rand( $t2_d5 );
          echo 'Turn 2, Die 5: ' . $t2_d5[ $die5 ] . '<br>';
          echo '<p>Now assign to the variable $turn2, all the results in an array.</p>';
          $turn2 = array( $t2_d1[ $die1 ], $t2_d2[ $die2 ], $t2_d3[ $die3 ], $t2_d4[ $die4 ], $t2_d5[ $die5 ] );
          var_dump( $turn2 );
          ?>
        </div>
        <div class="large-4 medium-4 columns">
          <h2>Roll all the dice for Turn 3</h2>

          <h3>Code written out for each of 5 dice</h3>
          <?php
          $t3_d1 = $all_dice[0];
          $die1  = array_rand( $t3_d1 );
          echo 'Turn 3, Die 1: ' . $t3_d1[ $die1 ] . '<br>';
          $t3_d2 = $all_dice[1];
          $die2  = array_rand( $t3_d2 );
          echo 'Turn 3, Die 2: ' . $t3_d2[ $die2 ] . '<br>';
          $t3_d3 = $all_dice[2];
          $die3  = array_rand( $t3_d3 );
          echo 'Turn 3, Die 3: ' . $t3_d3[ $die3 ] . '<br>';
          $t3_d4 = $all_dice[3];
          $die4  = array_rand( $t3_d4 );
          echo 'Turn 3, Die 4: ' . $t3_d4[ $die4 ] . '<br>';
          $t3_d5 = $all_dice[4];
          $die5  = array_rand( $t3_d5 );
          echo 'Turn 3, Die 5: ' . $t3_d5[ $die5 ] . '<br>';
          echo '<p>Now assign to the variable $turn3, all the results in an array.</p>';
          $turn3 = array( $t3_d1[ $die1 ], $t3_d2[ $die2 ], $t3_d3[ $die3 ], $t3_d4[ $die4 ], $t3_d5[ $die5 ] );
          var_dump( $turn3 );
          ?>
        </div>
      </div>
      <div class="row">
        <div class="large-4 medium-4 columns">
          <h2>Roll all the dice for Five-of-a-Kind</h2>

          <h3>Code written out for each of 5 dice</h3>
          <?php
          echo 'Die 1: ' . $all_dice[0][4] . '<br>';
          echo 'Die 2: ' . $all_dice[1][1] . '<br>';
          echo 'Die 3: ' . $all_dice[2][5] . '<br>';
          echo 'Die 4: ' . $all_dice[3][2] . '<br>';
          echo 'Die 5: ' . $all_dice[4][5] . '<br>';
          ?>
        </div>
        <div class="large-4 medium-4 columns">
          <h2>Roll all the dice for a Lg-Straight</h2>

          <h3>Code written out for each of 5 dice, 2-6</h3>
          <?php
          echo 'Die 1: ' . $all_dice[0][1] . '<br>';
          echo 'Die 2: ' . $all_dice[1][3] . '<br>';
          echo 'Die 3: ' . $all_dice[2][1] . '<br>';
          echo 'Die 4: ' . $all_dice[3][2] . '<br>';
          echo 'Die 5: ' . $all_dice[4][0] . '<br>';
          ?>
        </div>
        <div class="large-4 medium-4 columns">
          <h2>Roll all the dice for a Full House</h2>

          <h3>Code written out for each of 5 dice, 3s and 6s</h3>
          <?php
          echo 'Die 1: ' . $all_dice[0][2] . '<br>';
          echo 'Die 2: ' . $all_dice[1][3] . '<br>';
          echo 'Die 3: ' . $all_dice[2][4] . '<br>';
          echo 'Die 4: ' . $all_dice[3][5] . '<br>';
          echo 'Die 5: ' . $all_dice[4][0] . '<br>';
          ?>
        </div>
      </div>
      <div class="row">
        <div class="large-4 medium-4 medium-push-2 columns">

        </div>
        <div class="large-4 medium-4 medium-pull-2 columns">

        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="large-8 medium-8 columns">
    <h5>Here&rsquo;s your basic grid:</h5>
    <!-- Grid Example -->

    <div class="row">
      <div class="large-12 columns">
        <div class="callout panel">
          <p><strong>This is a twelve column section in a row.</strong> Each of
            these includes a div.panel element so you can see where the columns
            are - it's not required at all for the grid.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-6 medium-6 columns">
        <div class="callout panel">
          <p>Six columns</p>
        </div>
      </div>
      <div class="large-6 medium-6 columns">
        <div class="callout panel">
          <p>Six columns</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="large-4 medium-4 small-4 columns">
        <div class="callout panel">
          <p>Four columns</p>
        </div>
      </div>
      <div class="large-4 medium-4 small-4 columns">
        <div class="callout panel">
          <p>Four columns</p>
        </div>
      </div>
      <div class="large-4 medium-4 small-4 columns">
        <div class="callout panel">
          <p>Four columns</p>
        </div>
      </div>
    </div>

    <hr/>

    <h5>We bet you&rsquo;ll need a form somewhere:</h5>

    <form>
      <div class="row">
        <div class="large-12 columns">
          <label>Input Label</label>
          <input type="text" placeholder="large-12.columns"/>
        </div>
      </div>
      <div class="row">
        <div class="large-4 medium-4 columns">
          <label>Input Label</label>
          <input type="text" placeholder="large-4.columns"/>
        </div>
        <div class="large-4 medium-4 columns">
          <label>Input Label</label>
          <input type="text" placeholder="large-4.columns"/>
        </div>
        <div class="large-4 medium-4 columns">
          <div class="row collapse">
            <label>Input Label</label>

            <div class="small-9 columns">
              <input type="text" placeholder="small-9.columns"/>
            </div>
            <div class="small-3 columns">
              <span class="postfix">.com</span>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Select Box</label>
          <select>
            <option value="husker">Husker</option>
            <option value="starbuck">Starbuck</option>
            <option value="hotdog">Hot Dog</option>
            <option value="apollo">Apollo</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="large-6 medium-6 columns">
          <label>Choose Your Favorite</label>
          <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label
            for="pokemonRed">Radio 1</label>
          <input type="radio" name="pokemon" value="Blue"
                 id="pokemonBlue"><label for="pokemonBlue">Radio 2</label>
        </div>
        <div class="large-6 medium-6 columns">
          <label>Check these out</label>
          <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox
            1</label>
          <input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox
            2</label>
        </div>
      </div>
      <div class="row">
        <div class="large-12 columns">
          <label>Textarea Label</label>
          <textarea placeholder="small-12.columns"></textarea>
        </div>
      </div>
    </form>
  </div>

  <div class="large-4 medium-4 columns">
    <h5>Try one of these buttons:</h5>

    <p><a href="#" class="small button">Simple Button</a><br/>
      <a href="#" class="small radius button">Radius Button</a><br/>
      <a href="#" class="small round button">Round Button</a><br/>
      <a href="#" class="medium success button">Success Btn</a><br/>
      <a href="#" class="medium alert button">Alert Btn</a><br/>
      <a href="#" class="medium secondary button">Secondary Btn</a></p>

    <div class="panel">
      <h5>So many components, girl!</h5>

      <p>A whole kitchen sink of goodies comes with Foundation. Check out the
        docs to see them all, along with details on making them your own.</p>
      <a href="http://foundation.zurb.com/docs/" class="small button">Go to
        Foundation Docs</a>
    </div>
  </div>
</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/foundation/js/foundation.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
