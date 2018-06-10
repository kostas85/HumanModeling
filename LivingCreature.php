<?php

namespace HumanModel;

abstract class LivingCreature {

    private $height;

    private $weight;

    public function setHeight(double $height)
    {
        $this->height = $height;
    }

    public function getHeight() : double
    {
        return $this->height;
    }

    public function setWeight(double $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight() : double
    {
        return $this->weight;
    }

}