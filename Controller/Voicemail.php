<?php

namespace SIPCloud\AsteriskAPI\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

use SIPCloud\AsteriskAPI\Helpers\RESTfulResponse;
use SIPCloud\AsteriskAPI\Helpers\RESTfulError;


class Voicemail extends Controller
{
   
    public function limitResults () {
        if (isset($_GET['limit']) && (!empty($_GET['limit']))) {
            return intval($_GET['limit']);
        }
        return false;
    }
    
 
    /**
     * @Route("/", name="_sip")
     * @Method({"GET"})
     */
    public function indexAction() {   
        
        return new RESTfulError(array('errorCode'=>500, 'message'=> 'you dumb ass'));
        //return new RESTfulResponse(array('hello', $this->limitResults()));
    }
    
    /**
     * @Route("/", name="_sip_create")
     * @Method({"POST"})
     */
    public function create() {
        
        $_voicemail = new Voicemail();
        
        
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getEntityManager();
        
        
        
        
        return JSON::encodeData(array('shite'));        
    }
    
    /**
     * @Route("/{id}", name="_sip_fetch")
     * @Method({"GET"})
     */
    public function fetch($id) {
        
      
        
        
         return JSON::encodeData(array('action'=> 'fetch','id'=>$id));  
    }
    
    /**
     * @Route("/{id}", name="_sip_delete")
     * @Method({"DELETE"})
     */
    public function delete($id) {
        return JSON::encodeData(array('action'=> 'delete','id'=>$id));  
    }
    
    /**
     * @Route("/{id}", name="_sip_update")
     * @Method({"POST"})
     */
    public function update($id) {
        return JSON::encodeData(array('action'=> 'delete','id'=>$id));   
    }
    


}
