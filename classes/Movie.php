<?php

class Movie
{
    private $title;
    private $description;
    public $availability;
    private $publicationDate;
    public $type = [];
    public $certification;
    public $language;
    public $userVote;
    public $duration;
    public $platform = [];

    function __construct(string $_title, string $_publicationDate, string $_description,)
    {
        $this->setTitle($_title);
        $this->setDescription($_publicationDate);
        $this->setPublicationDate($_description);
    }

    private function setTitle($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro title deve essere una stringa';
        } else {
            $this->title = $element;
        }
    }
    public function getTitle()
    {
        return $this->title;
    }

    private function setDescription($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro description deve essere una stringa';
        } else {
            $this->description = $element;
        }
    }
    public function getDescription()
    {
        return $this->description;
    }
    
    private function setPublicationDate($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro publicationDate deve essere una stringa';
        } else {
            $this->publicationDate = $element;
        }
    }
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    public function setAvailability($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro availability deve essere una stringa';
        } else {
            $this->availability = $element;
        }
    }
    public function getAvailability()
    {
        return $this->availability;
    }

    public function setType($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro type deve essere una stringa';
        } else {
            
            $this->type = $element;
         }
    }
    public function getType()
    {
        return $this->type;
    }

    public function setCertification($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro certification deve essere una stringa';
        } else {
            $this->certification = $element;
        }
    }
    public function getCertification()
    {
        return $this->certification;
    }

    public function setLanguage($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro language deve essere una stringa';
        } else {
            $this->language = $element;
        }
    }
    public function getLanguage()
    {
        return $this->language;
    }

    public function setUserVote($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro userVote deve essere una stringa';
        } else {
            $this->userVote = $element;
        }
    }
    public function getUserVote()
    {
        return $this->userVote;
    }

    public function setDuration($element)
    {
        if (!is_numeric($element)) {
            echo 'Il parametro duration deve essere un numero';
        } else {
            $this->duration = $element;
        }
    }
    public function getDuration()
    {
        return $this->duration;
    }
    public function setPlatform($element)
    {
        if (is_numeric($element)) {
            echo 'Il parametro platform deve essere una stringa';
        } else {
            $this->platform = $element;
        }
    }
    public function getPlatform()
    {
        return $this->platform;
    }
};