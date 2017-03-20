<?php

namespace ProjetTLI\Model;

/**
 * Class Meridian
 * @package ProjetTLI\Model
 */
class Meridian implements \JsonSerializable
{
    /** @var string */
    protected $code;

    /** @var string */
    protected $name;

    /** @var string */
    protected $element;

    /** @var string */
    protected $yin;

    /**
     * Meridian constructor.
     *
     * @param string $code
     * @param string $name
     * @param string $element
     * @param string $yin
     */
    public function __construct($code, $name, $element, $yin)
    {
        $this->code = $code;
        $this->name = $name;
        $this->element = $element;
        $this->yin = $yin;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param string $element
     */
    public function setElement($element)
    {
        $this->element = $element;
    }

    /**
     * @return string
     */
    public function getYin()
    {
        return $this->yin;
    }

    /**
     * @param string $yin
     */
    public function setYin($yin)
    {
        $this->yin = $yin;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    function jsonSerialize()
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'element' => $this->element,
            'yin' => $this->yin,
        ];
    }
}