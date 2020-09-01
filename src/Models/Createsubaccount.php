<?php
/*
 * PepipostLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PepipostLib\Models;

use JsonSerializable;

/**
 *CreateSubaccount modal
 */
class Createsubaccount implements JsonSerializable
{
    /**
     * provide a username for the subaccount
     * @required
     * @var string $username public property
     */
    public $username;

    /**
     * email address to be registered with the account.
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * You can opt to set the password for the subaccount.\nIf set as 1, please provide a value in password
     * parameter.\nIf set as 0, the email confirmation link will act as a password reset link.
     * @required
     * @var string $setpassword public property
     */
    public $setpassword;

    /**
     * It is required to pass this value, if setpassword is set as 1.\nThe password must comprise minimum
     * of 8 characters and include one uppercase character, one lowercase character, one numeric character.
     * @var string|null $password public property
     */
    public $password;

    /**
     * Allowed values one_time_credit or unlimited by default, all subaccounts are created with credit type
     * as unlimited.
     * @maps credit_type
     * @var string|null $creditType public property
     */
    public $creditType;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $username    Initialization value for $this->username
     * @param string $email       Initialization value for $this->email
     * @param string $setpassword Initialization value for $this->setpassword
     * @param string $password    Initialization value for $this->password
     * @param string $creditType  Initialization value for $this->creditType
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->username    = func_get_arg(0);
            $this->email       = func_get_arg(1);
            $this->setpassword = func_get_arg(2);
            $this->password    = func_get_arg(3);
            $this->creditType  = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['username']    = $this->username;
        $json['email']       = $this->email;
        $json['setpassword'] = $this->setpassword;
        $json['password']    = $this->password;
        $json['credit_type'] = $this->creditType;

        return $json;
    }
}
