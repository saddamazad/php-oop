<?php
// Project's base namespace
namespace CloudStorage;

include "autoloader.php";

use \CloudStorage\Mail\Mailer; // Qualified Name, `\CloudStorage\Mail\` part is namespace and Mailer is the class name
use \CloudStorage\FileSystem\Scanner; // Qualified Name, `\CloudStorage\FileSystem\` part is namespace and Scanner is the class name
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main {
    public function __construct() {
        $mailer = new Mailer(); /* we had to use `\CloudStorage\Mail\Mailer()` instead of just Mailer() if the `use` keyword wasn't used above for this, `use` created an alias/shortcut */
        $mailer->sendMail();

        $scanner = new Scanner();
        $scanner->scan();

        echo "<br>";
        $jpeg = new Jpeg();
        echo $jpeg->getDimension();
    }
}

new Main();