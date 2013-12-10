<?php

/**
 * Filename: Message.php
 * Message class for the Guestbook
 */
class Message {
    private $_name;
    private $_message;
    private $_email;
    private $_is_approved;

    /**
     * @param Array
     * array(
     * 'id' => 1,
     * 'name' => 'Juan',
     * 'message' => 'Hello',
     * 'email' => 'juan@mail.com',
     * 'date_posted' => 'January 1, 2013',
     * 'is_approved' => 'Y'
     * )
     */
    public function __construct($config) {
        if (isset($config['name'])) {
            $this->_name = $config['name'];
        }
        if (isset($config['message'])) {
            $this->_message = $config['message'];
        }
        if (isset($config['email'])) {
            $this->_email = $config['email'];
        }
        if (isset($config['is_approved'])) {
            $this->_is_approved = $config['is_approved'];
        }
    }

    public function getMessage() {
        return $this->_message;
    }

    public function getName() {
            return $this->_name;      
    }

    public function getEmail() {
            return $this->_email;
    }
    public function isApproved() {
        return $this->_is_approved;
    }
}

?>