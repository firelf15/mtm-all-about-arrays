# One on One with Slavkat
# For 10/27/15
Deliverable for next week, LOOPS:

Iteration 1:
die1: 1, 2, 3, 4, 5, 6
die2: 6, 5, 4, 3, 2, 1
etc...

Iteration 2:
die1: 6, 5, 4, 3, 2, 1
die2: 1, 2, 3, 4, 5, 6
etc...

Iteration 3:
die5: 6, 4, 2, 1, 3, 5
die4: 1, 3, 5, 2, 4, 6
etc...

Iteration 4:
die5: 5, 3, 1, 2, 4, 6
die4: 6, 4, 2, 5, 3, 1
etc...

Extra Credit:
1. Build $all_dice array programatically
2. Associative array should have 5 dice (die1...die5), but the only string used in source code should be "die"
3. Each die will be an indexed array containing numbers 1-6, containing no duplicates
4. Numbers of each die can be in random order



# Foundation Compass Template

The easiest way to get started with Foundation + Compass.

## Requirements

  * Ruby 1.9+
  * [Node.js](http://nodejs.org)
  * [compass](http://compass-style.org/): `gem install compass`
  * [bower](http://bower.io): `npm install bower -g`

## Quickstart

  * [Download this starter compass project and unzip it](https://github.com/zurb/foundation-compass-template/archive/master.zip)
  * Run `bower install` to install the latest version of Foundation

Then when you're working on your project, just run the following command:

```bash
bundle exec compass watch
```

## Upgrading

If you'd like to upgrade to a newer version of Foundation down the road just run:

```bash
bower update
```
