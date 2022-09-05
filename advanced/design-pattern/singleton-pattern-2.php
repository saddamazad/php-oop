<?php
// instead of initializing a class again and again, use the instance of the class if it's already initialized

class FileWriter {
    static $instances = array();
    private $filename;
    
    public function __construct($filename) {
        $this->filename = $filename;
    }

    static public function getInstance($filename) {
        if( ! isset(self::$instances[$filename]) ) {
            self::$instances[$filename] = new FileWriter($filename);
        }

        return self::$instances[$filename];
    }

    public function getFilename() {
        echo $this->filename."<br>";
    }

    static public function dump() {
        print_r(self::$instances);
    }
}

$fw1 = FileWriter::getInstance("Excel");
$fw2 = FileWriter::getInstance("CSV");
$fw3 = FileWriter::getInstance("DOCX");

$fw4 = FileWriter::getInstance("Excel");
$fw5 = FileWriter::getInstance("DOCX");

$fw1->getFilename();
$fw2->getFilename();
$fw3->getFilename();

$fw4->getFilename();
$fw5->getFilename();


echo "<br>";

// it will return 3 instances, instead of 5. Because an object with `Excel` and `Docx` already created, so it won't recreate them.
FileWriter::dump();