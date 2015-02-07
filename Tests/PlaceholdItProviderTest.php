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
    public function testImageUrl($expected, $size, $format = 'gif', array $colors = array(), $text = null)
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
        $data = $this->dataProviderWithoutText();

        foreach ($this->dataProviderWithText() as $value) {
            array_push($data, $value);
        }

        return $data;
    }

    /**
     * Data provider containing different combinations.
     *
     * @return array
     */
    public function dataProviderWithoutText()
    {
        return array(
            array(
                '50x50.gif/000/fff',
                '50x50', 'gif', array('000', 'fff'),
            ),
            array(
                '50x50.gif/000/fff',
                '50x50', 'gif', array('bg' => '000', 'txt' => 'fff'),
            ),
            array(
                '50x50.gif/000/fff',
                '50x50', 'gif', array('fg' => 'fff', 'bg' => '000'),
            ),
            array(
                '50x50.gif/000/fff',
                '50x50', 'gif', array('foreground' => 'fff', 'background' => '000'),
            ),
            array(
                '50x50.gif',
                '50x50', 'gif', array(),
            ),
            array(
                '10.gif',
                10, 'gif', array(),
            ),
            array(
                '100.gif/000/fff',
                100, 'gif', array('000', 'fff'),
            ),
            array(
                '100.gif/000/fff',
                100, 'gif', array('bg' => '000', 'txt' => 'fff'),
            ),
            array(
                '100.gif/000/fff',
                100, 'gif', array('fg' => 'fff', 'bg' => '000'),
            ),
            array(
                '100.gif/000/fff',
                100, 'gif', array('foreground' => 'fff', 'background' => '000'),
            ),
            array(
                '100.gif',
                100, 'gif', array(),
            ),
            array(
                '50.gif',
                50, 'gif', array(),
            ),
            array(
                '50.jpeg',
                50, 'jpeg', array(),
            ),
            array(
                '50.jpg',
                50, 'jpg', array(),
            ),
            array(
                '50.png',
                50, 'png', array(),
            ),
            array(
                '100x50.gif',
                array('h' => 100, 'w' => 50), 'gif', array(),
            ),
            array(
                '100x50.gif',
                array('height' => 100, 'width' => 50), 'gif', array(),
            ),
            array(
                '50x100.gif/000/fff',
                array(50, 100), 'gif', array('000', 'fff'),
            ),
            array(
                '50x100.gif/000/fff',
                array(50, 100), 'gif', array('bg' => '000', 'txt' => 'fff'),
            ),
            array(
                '50x100.gif/000/fff',
                array(50, 100), 'gif', array('fg' => 'fff', 'bg' => '000'),
            ),
            array(
                '50x100.gif/000/fff',
                array(50, 100), 'gif', array('foreground' => 'fff', 'background' => '000'),
            ),
            array(
                '50x100.gif',
                array(50, 100), 'gif', array(),
            ),
        );
    }

    /**
     * Data provider containing different combinations.
     *
     * @return array
     */
    public function dataProviderWithText()
    {
        return array(
            array(
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', array('000', 'fff'), 'lorem ipsum',
            ),
            array(
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', array('bg' => '000', 'txt' => 'fff'), 'lorem ipsum',
            ),
            array(
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', array('fg' => 'fff', 'bg' => '000'), 'lorem ipsum',
            ),
            array(
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', array('foreground' => 'fff', 'background' => '000'), 'lorem ipsum',
            ),
            array(
                '50x50.gif?text=lorem+ipsum',
                '50x50', 'gif', array(), 'lorem ipsum',
            ),
            array(
                '10.gif?text=lorem+ipsum',
                10, 'gif', array(), 'lorem ipsum',
            ),
            array(
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', array('000', 'fff'), 'lorem ipsum',
            ),
            array(
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', array('bg' => '000', 'txt' => 'fff'), 'lorem ipsum',
            ),
            array(
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', array('fg' => 'fff', 'bg' => '000'), 'lorem ipsum',
            ),
            array(
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', array('foreground' => 'fff', 'background' => '000'), 'lorem ipsum',
            ),
            array(
                '100.gif?text=lorem+ipsum',
                100, 'gif', array(), 'lorem ipsum',
            ),
            array(
                '50.gif?text=lorem+ipsum',
                50, 'gif', array(), 'lorem ipsum',
            ),
            array(
                '50.jpeg?text=lorem+ipsum',
                50, 'jpeg', array(), 'lorem ipsum',
            ),
            array(
                '50.jpg?text=lorem+ipsum',
                50, 'jpg', array(), 'lorem ipsum',
            ),
            array(
                '50.png?text=lorem+ipsum',
                50, 'png', array(), 'lorem ipsum',
            ),
            array(
                '100x50.gif?text=lorem+ipsum',
                array('h' => 100, 'w' => 50), 'gif', array(), 'lorem ipsum',
            ),
            array(
                '100x50.gif?text=lorem+ipsum',
                array('height' => 100, 'width' => 50), 'gif', array(), 'lorem ipsum',
            ),
            array(
                '50x100.gif/000/fff?text=lorem+ipsum',
                array(50, 100), 'gif', array('000', 'fff'), 'lorem ipsum',
            ),
            array(
                '50x100.gif/000/fff?text=lorem+ipsum',
                array(50, 100), 'gif', array('bg' => '000', 'txt' => 'fff'), 'lorem ipsum',
            ),
            array(
                '50x100.gif/000/fff?text=lorem+ipsum',
                array(50, 100), 'gif', array('fg' => 'fff', 'bg' => '000'), 'lorem ipsum',
            ),
            array(
                '50x100.gif/000/fff?text=lorem+ipsum',
                array(50, 100), 'gif', array('foreground' => 'fff', 'background' => '000'), 'lorem ipsum',
            ),
            array(
                '50x100.gif?text=lorem+ipsum',
                array(50, 100), 'gif', array(), 'lorem ipsum',
            ),
        );
    }
}
