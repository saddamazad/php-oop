<?php
interface PasswordHashInterface {
    public function hash($data);
}

class MD5HashEngine implements PasswordHashInterface {
    public function hash($data) {
        return md5($data);
    }
}

class SHA1HashEngine implements PasswordHashInterface {
    public function hash($data) {
        return sha1($data);
    }
}

class NativeHashEngine implements PasswordHashInterface {
    public function hash($data) {
        return password_hash($data, PASSWORD_BCRYPT);
    }
}

class PasswordHasher {
    private $hashingEngine;

    public function __construct(PasswordHashInterface $hashingEngine=null) {
        if( $hashingEngine ) {
            $this->hashingEngine = $hashingEngine;
        }
    }

    public function getHash($data) {
        return $this->hashingEngine->hash($data);
    }

    public function setHashEngine(PasswordHashInterface $hashingEngine) {
        $this->hashingEngine = $hashingEngine;
    }
}

$md5he = new MD5HashEngine();
$sha1he = new SHA1HashEngine();
$nhe = new NativeHashEngine();

$password = "Some Password";

$ph = new PasswordHasher($md5he);
echo $ph->getHash($password);

echo "<br>";
$ph2 = new PasswordHasher($sha1he);
echo $ph2->getHash($password);


echo "<br><br>";

// we can change the Hash Engine in the runtime, so we are able to change our hashing strategy on the run
$ph->setHashEngine($nhe);
echo $ph->getHash($password);
