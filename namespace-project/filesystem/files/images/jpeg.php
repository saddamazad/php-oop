<?php
namespace CloudStorage\FileSystem\Files\Images;

use \CloudStorage\FileSystem\Files\Contracts\ImageContract;

// load Mailer class to use the sendMail() function
use \CloudStorage\Mail\Mailer;

class Jpeg implements ImageContract {
    public function getDimension() {
        $mailer = new Mailer();
        $mailer->sendMail();

        return "100x100";
    }
}

/* if we didn't use the `use` keyword above in line 4, we had to implement the Interface/Contract like this. */
// class Jpeg implements \CloudStorage\FileSystem\Files\Contracts\ImageContract {
//     public function getDimension() {
//         $mailer = new Mailer();
//         $mailer->sendMail();

//         return "100x100";
//     }
// }