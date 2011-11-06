<?php

/**
 * @Entity
 * @desc Voicemail
 * @author Thomas A. Bibb <hello@thomasbibb.co.uk>
 * @since 0.1
 * @todo
 */

Namespace SIPCloud\AsteriskAPI\Entity;

class Voicemail {
  private $uniqueid;
  private $customer_id;
  private $context;
  private $mailbox;
  private $password;
  private $fullname;
  private $email;
  private $pager;
  private $tz;
  private $attach;
  private $callback;
  private $review;
  private $operator;
  private $evelope;
  private $sayduration;
  private $saydurationm;
  private $sendvoicemail;
  private $delete;
  private $nextaftercmd;
  private $forcename;
  private $forcegreetings;
  private $hidefromdir;
  private $stamp;
  private $attachfmt;
  private $searchcontexts;
  private $cidinternalcontexts;
  private $exitcontext;
  private $volgain;
  private $tempgreetwarn;
  private $messagewrap;
  private $minpassword;
  /** @Column(name="vm-password", type="string", nullable=false) */
  private $vmpassword;
  /** @Column(name="vm-newpassword", type="string", nullable=false) */
  private $vmNewPassword;
  /** @Column(name="vm-passchanged", type="string", nullable=false) */
  private $vmPassChanged;
  /** @Column(name="vm-reenterpassword", type="string", nullable=false) */
  private $vmReEnterPassword;
  /** @Column(name="vm-mismatch", type="string", nullable=false) */
  private $vmMisMatch;
  /** @Column(name="vm-invalid-password", type="string", nullable=false) */
  private $vmInvalidPassword;
  /** @Column(name="vm-pls-try-again", type="string", nullable=false) */
  private $vmPlsTryAgain;
  /** @Column(name="listen-control-forward-key", type="string", nullable=false) */
  private $listenControlForwardKey;
  /** @Column(name="listen-control-reverse-key", type="string", nullable=false) */
  private $listenControlReverseKey;
  /** @Column(name="listen-control-pause-key", type="string", nullable=false) */
  private $listenControlPauseKey;
  /** @Column(name="listen-control-restart-key", type="string", nullable=false) */
  private $listenControlRestartKey;
  /** @Column(name="listen-control-stop-key", type="string", nullable=false) */
  private $listenControlStopKey;
   /** @Column(name="backupdeleted", type="string", nullable=false) */
  private $backupDeleted;

}
?>
