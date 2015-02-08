PlaceholdIt Provider
====================

[![Build Status](https://img.shields.io/travis/EmanueleMinotto/PlaceholdItProvider.svg?style=flat)](https://travis-ci.org/EmanueleMinotto/PlaceholdItProvider)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/a22e5509-ca4f-4902-a458-5994123c058f.svg?style=flat)](https://insight.sensiolabs.com/projects/a22e5509-ca4f-4902-a458-5994123c058f)
[![Coverage Status](https://img.shields.io/coveralls/EmanueleMinotto/PlaceholdItProvider.svg?style=flat)](https://coveralls.io/r/EmanueleMinotto/PlaceholdItProvider)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/g/EmanueleMinotto/PlaceholdItProvider.svg?style=flat)](https://scrutinizer-ci.com/g/EmanueleMinotto/PlaceholdItProvider/)
[![Total Downloads](https://img.shields.io/packagist/dt/emanueleminotto/faker-placehold-it-provider.svg?style=flat)](https://packagist.org/packages/emanueleminotto/faker-placehold-it-provider)

[placehold.it](http://placehold.it/) provider for [Faker](https://github.com/fzaninotto/Faker).

API: [emanueleminotto.github.io/PlaceholdItProvider](http://emanueleminotto.github.io/PlaceholdItProvider/)

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
