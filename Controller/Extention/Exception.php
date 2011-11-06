<?php

namespace SIPCloud\AsteriskAPI\Controller\Extention;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use SIPCloud\AsteriskAPI\Controller\JSON;


class Exception extends \Exception {
    
    
    const INVALID_EXTENTION = 'Invalid Extention';
    
    public function __construct($errorCode, $message) {
       
        $_errors = array
            (
                $errorCode=>$message
            );
        
        return JSON::error($_errors);
    }

}

?>
