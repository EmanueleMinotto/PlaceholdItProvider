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
    public function testImageUrl($expected, $size, $format = 'gif', array $colors = [], $text = null)
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
        return [
            [
                '50x50.gif/000/fff',
                '50x50', 'gif', ['000', 'fff'],
            ],
            [
                '50x50.gif/000/fff',
                '50x50', 'gif', ['bg' => '000', 'txt' => 'fff'],
            ],
            [
                '50x50.gif/000/fff',
                '50x50', 'gif', ['fg' => 'fff', 'bg' => '000'],
            ],
            [
                '50x50.gif/000/fff',
                '50x50', 'gif', ['foreground' => 'fff', 'background' => '000'],
            ],
            [
                '50x50.gif',
                '50x50', 'gif', [],
            ],
            [
                '10.gif',
                10, 'gif', [],
            ],
            [
                '100.gif/000/fff',
                100, 'gif', ['000', 'fff'],
            ],
            [
                '100.gif/000/fff',
                100, 'gif', ['bg' => '000', 'txt' => 'fff'],
            ],
            [
                '100.gif/000/fff',
                100, 'gif', ['fg' => 'fff', 'bg' => '000'],
            ],
            [
                '100.gif/000/fff',
                100, 'gif', ['foreground' => 'fff', 'background' => '000'],
            ],
            [
                '100.gif',
                100, 'gif', [],
            ],
            [
                '50.gif',
                50, 'gif', [],
            ],
            [
                '50.jpeg',
                50, 'jpeg', [],
            ],
            [
                '50.jpg',
                50, 'jpg', [],
            ],
            [
                '50.png',
                50, 'png', [],
            ],
            [
                '100x50.gif',
                ['h' => 100, 'w' => 50], 'gif', [],
            ],
            [
                '100x50.gif',
                ['height' => 100, 'width' => 50], 'gif', [],
            ],
            [
                '50x100.gif/000/fff',
                [50, 100], 'gif', ['000', 'fff'],
            ],
            [
                '50x100.gif/000/fff',
                [50, 100], 'gif', ['bg' => '000', 'txt' => 'fff'],
            ],
            [
                '50x100.gif/000/fff',
                [50, 100], 'gif', ['fg' => 'fff', 'bg' => '000'],
            ],
            [
                '50x100.gif/000/fff',
                [50, 100], 'gif', ['foreground' => 'fff', 'background' => '000'],
            ],
            [
                '50x100.gif',
                [50, 100], 'gif', [],
            ],
        ];
    }

    /**
     * Data provider containing different combinations.
     *
     * @return array
     */
    public function dataProviderWithText()
    {
        return [
            [
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', ['000', 'fff'], 'lorem ipsum',
            ],
            [
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', ['bg' => '000', 'txt' => 'fff'], 'lorem ipsum',
            ],
            [
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', ['fg' => 'fff', 'bg' => '000'], 'lorem ipsum',
            ],
            [
                '50x50.gif/000/fff?text=lorem+ipsum',
                '50x50', 'gif', ['foreground' => 'fff', 'background' => '000'], 'lorem ipsum',
            ],
            [
                '50x50.gif?text=lorem+ipsum',
                '50x50', 'gif', [], 'lorem ipsum',
            ],
            [
                '10.gif?text=lorem+ipsum',
                10, 'gif', [], 'lorem ipsum',
            ],
            [
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', ['000', 'fff'], 'lorem ipsum',
            ],
            [
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', ['bg' => '000', 'txt' => 'fff'], 'lorem ipsum',
            ],
            [
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', ['fg' => 'fff', 'bg' => '000'], 'lorem ipsum',
            ],
            [
                '100.gif/000/fff?text=lorem+ipsum',
                100, 'gif', ['foreground' => 'fff', 'background' => '000'], 'lorem ipsum',
            ],
            [
                '100.gif?text=lorem+ipsum',
                100, 'gif', [], 'lorem ipsum',
            ],
            [
                '50.gif?text=lorem+ipsum',
                50, 'gif', [], 'lorem ipsum',
            ],
            [
                '50.jpeg?text=lorem+ipsum',
                50, 'jpeg', [], 'lorem ipsum',
            ],
            [
                '50.jpg?text=lorem+ipsum',
                50, 'jpg', [], 'lorem ipsum',
            ],
            [
                '50.png?text=lorem+ipsum',
                50, 'png', [], 'lorem ipsum',
            ],
            [
                '100x50.gif?text=lorem+ipsum',
                ['h' => 100, 'w' => 50], 'gif', [], 'lorem ipsum',
            ],
            [
                '100x50.gif?text=lorem+ipsum',
                ['height' => 100, 'width' => 50], 'gif', [], 'lorem ipsum',
            ],
            [
                '50x100.gif/000/fff?text=lorem+ipsum',
                [50, 100], 'gif', ['000', 'fff'], 'lorem ipsum',
            ],
            [
                '50x100.gif/000/fff?text=lorem+ipsum',
                [50, 100], 'gif', ['bg' => '000', 'txt' => 'fff'], 'lorem ipsum',
            ],
            [
                '50x100.gif/000/fff?text=lorem+ipsum',
                [50, 100], 'gif', ['fg' => 'fff', 'bg' => '000'], 'lorem ipsum',
            ],
            [
                '50x100.gif/000/fff?text=lorem+ipsum',
                [50, 100], 'gif', ['foreground' => 'fff', 'background' => '000'], 'lorem ipsum',
            ],
            [
                '50x100.gif?text=lorem+ipsum',
                [50, 100], 'gif', [], 'lorem ipsum',
            ],
        ];
    }
}
