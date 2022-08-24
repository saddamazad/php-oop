<?php
class RGB {
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($colorCode = '') {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    public function setColor($colorCode) {
        $this->color = ltrim($colorCode, "#");
        $this->parseColor();
    }

    public function getColor() {
        return $this->color;
    }

    // this function is private, because it's doing the calculation part which is sensitive and should not be called from outside of Class
    private function parseColor() {
        if( $this->color ) {
            /*
            $colors = sscanf($this->color, "%02x%02x%02x");
            //print_r($colors);
            $this->red = $colors[0];
            $this->green = $colors[1];
            $this->blue = $colors[2];
            */

            // shortcut
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
        } else {
            /*
            $this->red = 0;
            $this->green = 0;
            $this->blue = 0;
            */

            // shortcut
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        }
    }

    public function readColor() {
        echo "Red = {$this->red}<br>Green = {$this->green}<br>Blue = {$this->blue}";
    }

    public function getRGBColor() {
        return array($this->red, $this->green, $this->blue);
    }

    public function getRed() {
        return $this->red;
    }

    public function getGreen() {
        return $this->green;
    }

    public function getBlue() {
        return $this->blue;
    }
}

$myColor = new RGB("#ff0000");
$myColor->readColor();
echo "<br><br>Red = ".$myColor->getRed();