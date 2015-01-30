<?php

namespace EmanueleMinotto\Faker\Tests;

use EmanueleMinotto\Faker\PlaceholdItProvider;
use PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \EmanueleMinotto\Faker\PlaceholdItProvider
 */
class PlaceholdItProviderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers ::imageUrl
     * @dataProvider imageUrlDataProvider
     */
    public function testImageUrl($size, $format = 'gif', array $colors = array(), $text = null, $expected)
    {
        $url = PlaceholdItProvider::imageUrl($size, $format, $colors, $text);

        $this->assertSame('http://placehold.it/'.$expected, $url);
    }

    /**
     * Data provider containing different combinations.
     *
     * @return array
     */
    public function imageUrlDataProvider()
    {
        return array(
            array('50x50', 'gif', array('000', 'fff'), 'lorem ipsum', '50x50.gif/000/fff?text=lorem+ipsum'),
            array('50x50', 'gif', array('000', 'fff'), null, '50x50.gif/000/fff'),
            array('50x50', 'gif', array('bg' => '000', 'txt' => 'fff'), 'lorem ipsum', '50x50.gif/000/fff?text=lorem+ipsum'),
            array('50x50', 'gif', array('bg' => '000', 'txt' => 'fff'), null, '50x50.gif/000/fff'),
            array('50x50', 'gif', array('fg' => 'fff', 'bg' => '000'), 'lorem ipsum', '50x50.gif/000/fff?text=lorem+ipsum'),
            array('50x50', 'gif', array('fg' => 'fff', 'bg' => '000'), null, '50x50.gif/000/fff'),
            array('50x50', 'gif', array('foreground' => 'fff', 'background' => '000'), 'lorem ipsum', '50x50.gif/000/fff?text=lorem+ipsum'),
            array('50x50', 'gif', array('foreground' => 'fff', 'background' => '000'), null, '50x50.gif/000/fff'),
            array('50x50', 'gif', array(), 'lorem ipsum', '50x50.gif?text=lorem+ipsum'),
            array('50x50', 'gif', array(), null, '50x50.gif'),
            array(10, 'gif', array(), 'lorem ipsum', '10.gif?text=lorem+ipsum'),
            array(10, 'gif', array(), null, '10.gif'),
            array(100, 'gif', array('000', 'fff'), 'lorem ipsum', '100.gif/000/fff?text=lorem+ipsum'),
            array(100, 'gif', array('000', 'fff'), null, '100.gif/000/fff'),
            array(100, 'gif', array('bg' => '000', 'txt' => 'fff'), 'lorem ipsum', '100.gif/000/fff?text=lorem+ipsum'),
            array(100, 'gif', array('bg' => '000', 'txt' => 'fff'), null, '100.gif/000/fff'),
            array(100, 'gif', array('fg' => 'fff', 'bg' => '000'), 'lorem ipsum', '100.gif/000/fff?text=lorem+ipsum'),
            array(100, 'gif', array('fg' => 'fff', 'bg' => '000'), null, '100.gif/000/fff'),
            array(100, 'gif', array('foreground' => 'fff', 'background' => '000'), 'lorem ipsum', '100.gif/000/fff?text=lorem+ipsum'),
            array(100, 'gif', array('foreground' => 'fff', 'background' => '000'), null, '100.gif/000/fff'),
            array(100, 'gif', array(), 'lorem ipsum', '100.gif?text=lorem+ipsum'),
            array(100, 'gif', array(), null, '100.gif'),
            array(50, 'gif', array(), 'lorem ipsum', '50.gif?text=lorem+ipsum'),
            array(50, 'gif', array(), null, '50.gif'),
            array(50, 'jpeg', array(), 'lorem ipsum', '50.jpeg?text=lorem+ipsum'),
            array(50, 'jpeg', array(), null, '50.jpeg'),
            array(50, 'jpg', array(), 'lorem ipsum', '50.jpg?text=lorem+ipsum'),
            array(50, 'jpg', array(), null, '50.jpg'),
            array(50, 'png', array(), 'lorem ipsum', '50.png?text=lorem+ipsum'),
            array(50, 'png', array(), null, '50.png'),
            array(array('h' => 100, 'w' => 50), 'gif', array(), 'lorem ipsum', '100x50.gif?text=lorem+ipsum'),
            array(array('h' => 100, 'w' => 50), 'gif', array(), null, '100x50.gif'),
            array(array('height' => 100, 'width' => 50), 'gif', array(), 'lorem ipsum', '100x50.gif?text=lorem+ipsum'),
            array(array('height' => 100, 'width' => 50), 'gif', array(), null, '100x50.gif'),
            array(array(50, 100), 'gif', array('000', 'fff'), 'lorem ipsum', '50x100.gif/000/fff?text=lorem+ipsum'),
            array(array(50, 100), 'gif', array('000', 'fff'), null, '50x100.gif/000/fff'),
            array(array(50, 100), 'gif', array('bg' => '000', 'txt' => 'fff'), 'lorem ipsum', '50x100.gif/000/fff?text=lorem+ipsum'),
            array(array(50, 100), 'gif', array('bg' => '000', 'txt' => 'fff'), null, '50x100.gif/000/fff'),
            array(array(50, 100), 'gif', array('fg' => 'fff', 'bg' => '000'), 'lorem ipsum', '50x100.gif/000/fff?text=lorem+ipsum'),
            array(array(50, 100), 'gif', array('fg' => 'fff', 'bg' => '000'), null, '50x100.gif/000/fff'),
            array(array(50, 100), 'gif', array('foreground' => 'fff', 'background' => '000'), 'lorem ipsum', '50x100.gif/000/fff?text=lorem+ipsum'),
            array(array(50, 100), 'gif', array('foreground' => 'fff', 'background' => '000'), null, '50x100.gif/000/fff'),
            array(array(50, 100), 'gif', array(), 'lorem ipsum', '50x100.gif?text=lorem+ipsum'),
            array(array(50, 100), 'gif', array(), null, '50x100.gif'),
        );
    }
}
