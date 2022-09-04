<?php
interface BaseStorage {
    public function setFileName($filename);
    public function writeData($data);
    //public function appendData($data);
    public function setMode($mode);
}

class Storage implements BaseStorage {
    private $filename;
    private $mode;

    public function __construct($filename, $mode=null) {
        $this->setFileName($filename);
        $this->mode = $mode;
    }

    public function setFileName($filename) {
        $this->filename = $filename;
    }

    public function writeData($data) {
        //file_put_contents($this->filename, $data);
        file_put_contents($this->filename, $data, $this->mode);
    }

    /*public function appendData($data) {
        file_put_contents($this->filename, $data, FILE_APPEND);
    }*/

    public function setMode($mode) {
        $this->mode = $mode;
    }
}

class DataManager {
    /*public function saveData($filename, $data) {
        $storage = new Storage($filename);
        $storage->writeData($data);
    }*/

    public function saveData(BaseStorage $storage, $data) {
        $storage->writeData($data);
    }

    /*public function addData($filename, $data) {
        $storage = new Storage($filename);
        $storage->appendData($data);
    }*/
}

$dm = new DataManager();
//$dm->saveData("abcd.txt", "My Data Extra");
//$dm->addData("abcd.txt", "\nMy Appended Data Lorem ipsum dolor set amet.");

$file = new Storage("abcd.txt");
$file->setMode(FILE_APPEND);

// passing the `$file` object to the DataManager's saveData() function / doing the dependency injection
$dm->saveData($file, "\n2 More My Imp Data Extra");