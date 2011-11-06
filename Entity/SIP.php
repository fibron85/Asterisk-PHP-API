<?php

/**
 * @desc Database Entity for SIP
 * @author Thomas A. Bibb <hello@thomasbibb.co.uk>
 * @since 0.1
 * @todo Doctrine Annotations
 */

Namespace SIPCloud\AsteriskAPI\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class SIP {
     private $id;
     private $name;
     private $host;
     private $nat;
     private $type;
     private $accountcode;
     private $amaflags;
     private $calllimit;
     private $callgroup;
     private $callerid;
     private $cancallfoward;
     private $canreinvite;
     private $content;
     private $defaultip;
     private $dtmfmode;
     private $fromuser;
     private $fromdomain;
     private $insecure;
     private $language;
     private $mailbox;
     private $md5secret;
     private $deny;
     private $permit;
     private $mask;
     private $musiconhold;
     private $pickupgroup;
     private $qualify;
     private $regexten;
     private $retrictcid;
     private $rtptimeout;
     private $rtpholdtimeout;
     private $secret;
     private $setvar;
     private $disallow;
     private $allow;
     private $fullcontact;
     private $ipaddr;
     private $port;
     private $ragserver;
     private $ragseconds;
     private $lastms;
     private $username;
     private $defaultuser;
     private $subscribecontext;
     private $useragent;

     
}

?>
