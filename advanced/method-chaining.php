<?php
class StringUtility {
    private $string;
    private $search;

    public function __construct($string) {
        $this->string = $string;
    }

    public function search($string) {
        $this->search = $string;

        // return the object itself, this is MUST for method chaining - all the methods should return the object itself
        return $this;
    }

    public function replace($string) {
        if( ! isset($this->search) ) {
            throw new Exception("Nothing to replace");
        }

        $this->string = str_replace($this->search, $string, $this->string);
        // empty `search` property after a replace done
        //$this->search = "";
        return $this;
    }

    public function upperCase() {
        $this->string = strtoupper($this->string);
        return $this;
    }

    public function lowerCase() {
        $this->string = strtolower($this->string);

        // return the object itself, this is MUST for method chaining - all the methods should return the object itself
        return $this;
    }

    public function print() {
        echo $this->string;
    }
}

$su = new StringUtility("Hello World");
//$su->search("Hello")->replace("Hi")->upperCase()->lowerCase()->print();

$su->search("Hello")->replace("Hi")->search("World")->replace("Earth")->upperCase()->print();