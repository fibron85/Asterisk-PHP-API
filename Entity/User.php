<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author thomasbibb
 */
class User {
    
    private $username;
    private $password;
    private $firstname;
    private $lastname;
    private $salt = null;
    
    const HASH_CRC32 = 'crc32';
    const HASH_SHA256 = 'sha256';
    
    public static $hash = null;
    
    /**
     * Combines both Firstname and Lastname to make a Fullname
     * @return string Fullname 
     */
    public function getFullname() {
        return $this->firstname.' '.$this->lastname;
    }
    
    /**
     * Validates the given plaintext password against 
     * the md5 hash and secure salt
     * @param string $plaintextPassword
     * @return boolean
     */
    public function validPassword ($plaintextPassword) {
        
        $this->initaliseSalt();
        
        if (!md5($plaintextPassword.$this->salt)== $this->password) {
            return true;
        } 
        
        return false;
    }
    
    /**
     * A highly secure salt 
     * @name initaliseSalt
     * @return string
     */
    public function initaliseSalt () {
        if ($this->salt === null) {
           $this->initaliseHashArray();
           $hash = mt_rand(1,count(self::$hash));
           $this->salt = md5(hash(self::$hash[$hash],mt_rand().md5(time())));
        }
    }
    
    /**
     * Populates the self::hash with the avalable hash algorithmes 
     * @name initaiseHashArray
     */
    public function initaliseHashArray() {
        if (self::$hash === null) {
            self::$hash = array(
                self::HASH_CRC32,
                self::HASH_SHA256
            );
        }       
    }
    
}

?>