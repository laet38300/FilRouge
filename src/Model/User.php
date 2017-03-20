<?php

namespace ProjetTLI\Model;

/**
 * Class User
 * @package ProjetTLI\Model
 */
class User
{
    /** @var string */
    protected $id;

    /** @var string */
    protected $email;

    /** @var string */
    protected $username;

    /** @var string */
    protected $password;

    /**
     * User constructor.
     *
     * @param int $id
     * @param string $username
     * @param string $password
     * @param string $email
     */
    public function __construct($id, $username, $password, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Check if password match user password
     *
     * @param string $passwordToCheck
     *
     * @return bool
     */
    public function checkPassword($passwordToCheck)
    {
        return password_verify($passwordToCheck, $this->password);
    }
}
