<?php

namespace HumanModel;

class Language {
    
    private $name;
    private $isoCode;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function setIsoCode(string $isoCode)
    {
        $this->isoCode = $isoCode;
    }

    public function getIsoCode() : string
    {
        return $this->isoCode;
    }

}