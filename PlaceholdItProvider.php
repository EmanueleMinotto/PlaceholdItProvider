<?php

namespace EmanueleMinotto\Faker;

use Faker\Provider\Base as Base_Provider;

/**
 * placehold.it provider for Faker.
 *
 * @author Emanuele Minotto <minottoemanuele@gmail.com>
 *
 * @link http://placehold.it/
 */
class PlaceholdItProvider extends Base_Provider
{
    /**
     * placehold.it image URL.
     *
     * @param integer|string|array $size   Height is optional, if no height is specified the image will be a square.
     * @param string               $format Adding an image file extension will render the image in the proper format.
     * @param array                $colors An array containing background color and foreground color.
     * @param string               $text   Custom text can be entered using a query string at the very end of the url.
     *
     * @return string
     */
    public static function imageUrl($size, $format = 'gif', array $colors = array(), $text = null)
    {
        // $colors should be 100 or 100x100
        // but can be ['height' => 100, 'width' => 100]
        // or ['w' => 100, 'h' => 100]
        if (is_array($size)) {
            ksort($size);
            $size = implode('x', $size);
        }

        $base = 'http://placehold.it/'.$size.'.'.trim($format, '.');

        // $colors should be ['background', 'text']
        // but can be ['text' => '000', 'background' => 'fff']
        // or ['txt' => '000', 'bg' => 'fff']
        // or ['foreground' => '000', 'background' => 'fff']
        // or ['fg' => '000', 'bg' => 'fff']
        ksort($colors);

        if (2 === count($colors)) {
            $base .= '/'.implode('/', $colors);
        }

        if ($text) {
            $base .= '?'.http_build_query(array(
                'text' => $text,
            ));
        }

        return $base;
    }
}
