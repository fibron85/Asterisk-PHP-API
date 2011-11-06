<?php

/**
 * @Entity
 * @desc Database Entity for Extentions
 * @author Thomas A. Bibb <hello@thomasbibb.co.uk>
 * @since 0.1
 * @todo Exceptions
 */

Namespace AsteriskAPI\Model;

class extention {
     /**
      * @Column(type="integer", nullable=false)
      * @generatedValue(strategy="IDENTITY")
      */
     private $id;
     /** @Column(type="string", nullable=false) */
     private $context;
     /** @Column(type="string", nullable=false) */
     private $exten;
     /** @Column(type="integer", nullable=false) */
     private $priority;
     /** @Column(type="string", nullable=false) */
     private $app;
     /** @Column(type="string", nullable=false) */
     private $appdata;  

     /**
      *
      * @param <string> $context
      * @param <string> $exten
      * @param <integer> $priority
      * @param <string> $app
      * @param <string> $appData
      */
     public function __construct($context, $exten, $priority, $app, $appData) {
         $this->context = $context;
         $this->exten = $exten;
         $this->priority = $priority;
         $this->app = $app;
         $this->appdata = $appData;
     }
     /**
      *
      * @return <type>
      */
     public function getId () {
         return $this->id;
     }
     /**
      * @desc Gets the extention's Context
      * @return <String>
      */
     public function getContext() {
         return $this->context;
     }
     /**
      * @desc Sets the context of the extention
      * @param <String> $context
      */
     public function setContext ($context) {
         $this->context = $context;
     }

     /**
      * @name getExten
      * Gets the Exten
      * @return <String>
      */
     public function getExten () {
         return $this->exten;
     }
     /**
      * @desc Sets the extention's Exten
      * @param <String> $exten
      */
     public function setExten ($exten) {
         $this->exten = $exten;
     }
     /**
      * @desc
      * @return <integer>
      */
     public function getPriority () {
         return $this->priority;
     }
     /**
      * @desc Set the Priority of an extention
      * @param <Integer> $priority
      */
     public function setPriority ($priority) {
         $this->priority = $priority;
     }
     /**
      * @Desc Gets the app for the extention
      * @return <string>
      */
     public function getApp () {
         return (string)$this->app;
     }

     /**
      * @Desc Sets the app for the extention
      * @param <type> $app
      */
     public function setApp ($app) {
         $this->app = $app;
     }

     /**
      * @Desc Gets the appData for the extention
      * @return <String>
      */
     public function getAppData () {
         return $this->appdata;
     }

     /**
      * @Desc Sets the appData for the extention
      * @param <String> $appData
      */
     public function setAppData ($appData) {
         $this->appdata = $appData;
     }

}


?>
