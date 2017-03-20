<?php

namespace ProjetTLI\Model;

/**
 * Class Pathology
 * @package ProjetTLI\Model
 */
class Pathology implements \JsonSerializable
{
    /** @var string */
    protected $id;

    /** @var Meridian */
    protected $meridian;

    /** @var string */
    protected $type;

    /** @var string */
    protected $description;

    /** @var Symptom[] */
    protected $symptoms;

    /**
     * Pathology constructor.
     *
     * @param string $id
     * @param Meridian $meridian
     * @param string $type
     * @param string $description
     * @param array $symptoms
     */
    public function __construct($id, Meridian $meridian, $type, $description, array $symptoms)
    {
        $this->id = $id;
        $this->meridian = $meridian;
        $this->type = $type;
        $this->description = $description;
        $this->symptoms = $symptoms;
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
    public function getMeridian()
    {
        return $this->meridian;
    }

    /**
     * @param string $meridian
     */
    public function setMeridian($meridian)
    {
        $this->meridian = $meridian;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Symptom[]
     */
    public function getSymptoms()
    {
        return $this->symptoms;
    }

    /**
     * @param Symptom $symptom
     */
    public function addSymptom(Symptom $symptom)
    {
        $this->symptoms[] = $symptom;
    }

    /**
     * @param Symptom[] $symptoms
     */
    public function setSymptoms($symptoms)
    {
        $this->symptoms = $symptoms;
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
            'id' => $this->id,
            'meridian' => $this->meridian,
            'type' => $this->type,
            'description' => $this->description,
            'symptoms' => $this->symptoms,
        ];
    }
}