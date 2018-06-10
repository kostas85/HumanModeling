<?php

namespace HumanModel;

use \Datetime;

class Human extends LivingCreature implements Talkable{

    private $firstName;

    private $lastName;

    private $dateOfBirth;

    private $languages;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->languages = [];
    }

    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName() : string
    {
        return $this->firstName;
    }

    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName() : string 
    {
        return $this->lastName;
    }

    public function getFullName() : string 
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setDateOfBirth(DateTime $dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function getDateOfBirth() : DateTime 
    {
        return $this->dateOfBirth;
    }

    public function getAge() : int
    {
        $now = new DateTime();
        $interval = $now->diff($this->dateOfBirth);
        return $interval->y;
    }

    public function addLanguage(Language $language)
    {
        $this->language[] = $language;
    }

    public function getLanguages() : array 
    {
        return $this->languages;
    }

    public function say(string $sentance, Language $language)
    {
        if (! in_array($language, $this->languages)){
            echo 'A person ' . $this->getFullName() . ' does not speak that language.';
        } else {
            echo 'A person ' . $this->getFullName() . ' says ' . $sentance . ' in ' . $language->getName();
        }
    }

}