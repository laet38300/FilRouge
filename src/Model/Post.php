<?php

namespace ProjetTLI\Model;

/**
 * Class Post
 * @package ProjetTLI\Model
 */
class Post
{
    /** @var string */
    protected $date;

    /** @var \DateTime */
    protected $dateTime;

    /** @var string */
    protected $link;

    /** @var string */
    protected $title;

    /** @var string */
    protected $text;

    /** @var string */
    protected $summary;

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     */
    public function setSummary($summary)
    {
        $this->summary = $summary;
    }

    /**
     * Summarize text
     */
    public function summarizeText() {
        $summary = strip_tags($this->text);

        // Truncate summary line to 100 characters
        $maxLen = 100;
        if (strlen($summary) > $maxLen)
            $summary = substr($summary, 0, $maxLen) . '...';

        $this->summary = $summary;
    }
}