<?php

namespace App\Rgb;

class Creatergb
{
    private $red;
    private $green;
    private $blue;

    public function __construct($red, $green, $blue)
    {
        $this->set_red($red);
        $this->set_green($green);
        $this->set_blue($blue);

    }

    private function set_red($red)
    {
        if ($red < 0 || $red > 255) {
            throw new \InvalidArgumentException('Red color is not correct ');
        }
        $this->red = $red;
    }

    public function get_red()
    {
        return $this->red;
    }

    private function set_green($green)
    {
        if ($green < 0 || $green > 255) {
            throw new \InvalidArgumentException('Green color is not correct ');
        }
        $this->green = $green;
    }

    public function get_green()
    {
        return $this->green;
    }

    private function set_blue($blue)
    {
        if ($blue < 0 || $blue > 255) {
            throw new \InvalidArgumentException('Blue color is not correct ');
        }
        $this->blue = $blue;
    }

    public function get_blue()
    {
        return $this->blue;
    }


    public function equals(Creatergb $rgb)
    {
        if ($this->red !== $rgb->get_red() || $this->green !== $rgb->get_green() || $this->blue !== $rgb->get_blue()) {
            return false;
        }

        return true;

    }

    static function random()
    {
        $red_rand = rand(0, 255);
        $green_rand = rand(0, 255);
        $blue_rand = rand(0, 255);

        return new self($red_rand, $green_rand, $blue_rand);
    }

    public function mix(Creatergb $rgb)
    {
        $new_red = ($this->red + $rgb->red) / 2;
        $new_green = ($this->green + $rgb->green) / 2;
        $new_blue = ($this->blue + $rgb->blue) / 2;

        return new self($new_red, $new_green, $new_blue);
    }

}