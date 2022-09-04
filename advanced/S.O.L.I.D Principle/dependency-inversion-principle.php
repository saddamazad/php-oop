<?php
/**
 * Functionalities of a Class should be done depending on abstraction, NOT by hard dependency
 * 
 * `Pass` or `Inject` the object as parameter of function/
 * 
 * Dependency injection is the application of dependency inversion principle
 * 
 */



// bad example
class Authenticator {
    public function authenticate($username, $password, $external=false, $externalService=false) {
        if($external==true && "google"==$externalService) {
            $ga = new GoogleAuthenticator();
            $ga->authenticate();
        } elseif($external==true && "github"==$externalService) {
            $git_auth = new GithubAuthenticator();
            $git_auth->authenticate();
        } else {
            $la = new LocalAuthenticator();
            $la->authenticate();
        }
    }
}



// good example
interface AuthServiceProviderInterface {
    public function authenticate();
}

class GithubAuthenticator implements AuthServiceProviderInterface {
    public function authenticate() {

    }
}

class LocalAuthenticator implements AuthServiceProviderInterface {
    public function authenticate() {
        
    }
}

class Authenticator {
    private $authServiceProvider;

    public function __construct(AuthServiceProviderInterface $asp) {
        $this->authServiceProvider = $asp;
    }

    public function authenticate() {
        //$this->asp->authenticate();
        $this->authServiceProvider->authenticate();
    }
}

$git_auth = new GithubAuthenticator();
$auth = new Authenticator($git_auth); // pass or inject the `$git_auth` object as dependency
$auth->authenticate();

$la = new LocalAuthenticator();
$auth = new Authenticator($la); // pass or inject the `$la` object as dependency
$auth->authenticate();
