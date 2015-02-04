PlaceholdIt Provider [![Build Status](https://travis-ci.org/EmanueleMinotto/PlaceholdItProvider.svg)](https://travis-ci.org/EmanueleMinotto/PlaceholdItProvider)
====================

[placehold.it](http://placehold.it/) provider for [Faker](https://github.com/fzaninotto/Faker).

## Install
Install Silex using [Composer](http://getcomposer.org/).

Install the PlaceholdItProvider adding `emanueleminotto/faker-placehold-it-provider` to your composer.json or from CLI:

```
$ composer require emanueleminotto/faker-placehold-it-provider
```

## Usage

```php
$faker = Faker\Factory::create();
$faker->addProvider(new EmanueleMinotto\Faker\PlaceholdItProvider($faker));

// size
$url = $faker->imageUrl(50); // http://placehold.it/50.gif
$url = $faker->imageUrl('50x100'); // http://placehold.it/50x100.gif
$url = $faker->imageUrl(array(50, 100)); // http://placehold.it/50x100.gif
$url = $faker->imageUrl(array('w' => 100, 'h' => 50)); // http://placehold.it/50x100.gif

// format
// can be gif, jpeg, jpg or png
$url = $faker->imageUrl(50); // http://placehold.it/50.gif
$url = $faker->imageUrl(50, 'jpeg'); // http://placehold.it/50.jpeg
$url = $faker->imageUrl(50, 'jpg'); // http://placehold.it/50.jpg
$url = $faker->imageUrl(50, 'png'); // http://placehold.it/50.png

// colors
$url = $faker->imageUrl(50, null, array('000', 'fff')); // http://placehold.it/50.gif/000/fff
$url = $faker->imageUrl(50, null, array('w' => 100, 'h' => 100)); // http://placehold.it/50.gif/000/fff

// text
$url = $faker->imageUrl(50, null, array(), 'lorem ipsum'); // http://placehold.it/50.gif?text=lorem+ipsum
```
