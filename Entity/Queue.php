<?php

/**
 * @Entity
 * @desc Database Entity for Queues
 * @author Thomas A. Bibb <hello@thomasbibb.co.uk>
 * @since 0.1
 * @todo constrcutor, acsessors
 */

Namespace AsteriskAPI\Model;

class queue {

     /** @Column(type="string", nullable=false) */
     private $name;
     /** @Column(type="string", nullable=false) */
     private $musiconhold;
     /** @Column(type="string", nullable=false) */
     private $announce;
     /** @Column(type="string", nullable=false) */
     private $context;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $timeout;
     /** @Column(type="integer", nullable=false) */
     private $monitor_join;
     /** @Column(type="string", nullable=false) */
     private $monitor_format;
     /** @Column(type="string", nullable=false) */
     private $queue_youarenext;
     /** @Column(type="string", nullable=false) */
     private $queue_thereare;
     /** @Column(type="string", nullable=false) */
     private $queue_callswaiting;
     /** @Column(type="string", nullable=false) */
     private $queue_holdtime;
     /** @Column(type="string", nullable=false) */
     private $queue_minutes;
     /** @Column(type="string", nullable=false) */
     private $queue_seconds;
     /** @Column(type="string", nullable=false) */
     private $queue_lessthan;
     /** @Column(type="string", nullable=false) */
     private $queue_thankyou;
     /** @Column(type="string", nullable=false) */
     private $queue_reporthold;
      /** @Column(type="integer", lenght="11", nullable=false) */
     private $announce_frequency;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $announce_round_seconds;
     /** @Column(type="string", nullable=false) */
     private $announce_holdtime;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $retry;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $wrapuptime;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $maxlen;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $servicelevel;
     /** @Column(type="string", nullable=false) */
     private $strategy;
     /** @Column(type="string", nullable=false) */
     private $joinempty;
     /** @Column(type="string", nullable=false) */
     private $leavewhenempty;
     /** @Column(type="Boolean", nullable=false) */
     private $eventmemberstatus;
     /** @Column(type="Boolean", nullable=false) */
     private $eventwhencalled;
     /** @Column(type="Boolean", nullable=false) */
     private $reportholdtime;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $memberdelay;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $weight;
     /** @Column(type="Boolean", nullable=false) */
     private $timeoutrestart;
     /** @Column(type="string", lenght="50", nullable=false) */
     private $periodic_announce;
     /** @Column(type="integer", lenght="11", nullable=false) */
     private $periodic_announce_frequency;
     /** @Column(type="Boolean", nullable=false) */
     private $ringinuse;
     /** @Column(type="Boolean", nullable=false) */
     private $setinterfacevar;

}
?>
