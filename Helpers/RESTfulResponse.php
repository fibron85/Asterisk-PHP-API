<?php

namespace SIPCloud\AsteriskAPI\Helpers;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RESTfulResponse extends Response
{
    
    public static $mimeTypes = null;
    
    const RESPOND_XML = 'xml';
    const RESPOND_JSON = 'json';
    
    
    public function initialiseMimeTypes () {
            self::$mimeTypes = array(
                self::RESPOND_JSON,
                self::RESPOND_XML
            );
    }
   
    public function __construct($content = '', $headers = array(), $status = 200, $mimeType = null) {
        return parent::__construct($this->seralise($mimeType, $content), $status, $headers);
    }
    
    public function seralise ($mimeType, $content) {
        
        $mimeType = $this->assertMimeType($mimeType);
        
        if ($mimeType == self::RESPOND_JSON) {
            return json_encode($content);
        }
        
        /**
         *  @todo make this work.
         */
        if ($mimeType == self::RESPOND_XML) {
            
        }
    }
       
    public function assertMimeType($mimeType = null) {
        
        if (self::$mimeTypes === null) {
            $this->initialiseMimeTypes();
        }
        
        if ($mimeType === null) {
            $request = Request::createFromGlobals();
            $mimeType = $request->getContentType();
        }    
        
        if (!in_array($mimeType, self::$mimeTypes)) {
            throw new \Exception(
                    'Invalid mimeType for RESTful Response'
            );
        }
        
        return $mimeType;
    }
}
