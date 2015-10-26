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
        // An associative array of 5 random index arrays for all the dice togather
        $die1  = array();
        $die2  = array();
        $die3  = array();
        $die4  = array();
        $die5  = array();
        $sides = range( 1, 6 );
        shuffle( $sides );
        foreach ( $sides as $side ) {
          array_push( $die1, $side );
        }
        foreach ( $sides as $side ) {
          shuffle( $sides );
          array_push( $die2, $side );
        }
        foreach ( $sides as $side ) {
          shuffle( $sides );
          array_push( $die3, $side );
        }
        foreach ( $sides as $side ) {
          shuffle( $sides );
          array_push( $die4, $side );
        }
        foreach ( $sides as $side ) {
          shuffle( $sides );
          array_push( $die5, $side );
        }
        $all_dice = array( $die1, $die2, $die3, $die4, $die5 );
        echo 'die1 = ';
        var_dump( $die1 );
        echo( '<hr>' );
        echo 'die2 = ';
        var_dump( $die2 );
        echo( '<hr>' );
        echo 'die3 = ';
        var_dump( $die3 );
        echo( '<hr>' );
        echo 'die4 = ';
        var_dump( $die4 );
        echo( '<hr>' );
        echo 'die5 = ';
        var_dump( $die5 );
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
