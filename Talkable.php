<?php

namespace HumanModel;

interface Talkable {

    public function say(string $sentance, Language $language);

}