<?php
/**
 * Open Close Principle - Open for extension and close for modification
 * 
 * when a class is already written(finished), if we need extra features we shouldn't modify the Class code. Like WordPress core class files, extension done by plugins without editing the core Classes
 * 
 */



// bad design principle
/*
class FileDisplay {
    public function display($file, $fileType) {
        if("mp4"==$fileType) {
            // display video player
        } elseif("mp3"==$fileType) {
            // display audio player
        } else {
            // display text file
        }
    }
    // to add new filetypes later we will have to modify this class, this very bad
}
*/



// good design principle
interface FileInterface {
    public function display();
}

class FileDisplay {
    public function display(FileInterface $file) {
        $file->display();
    }
}

class ImageFile implements FileInterface {
    public function display() {
        // display image file
    }
}

class VideoFile implements FileInterface {
    public function display() {
        // display video player
    }
}

class AudioFile implements FileInterface {
    public function display() {
        // display audio player
    }
}

// we can add any filetype now by just extending the Class, without modifying the main Class


$fd = new FileDisplay();

$image = new ImageFile("abcd.jpg");
$fd->display($image);

$video = new VideoFile("abcd.jpg");
$fd->display($video);