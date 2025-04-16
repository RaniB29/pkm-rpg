<?php

namespace PkmRpg\Application\Controller;

use PkmRpg\Application\SystemUtils;
use PkmRpg\Application\Model\Entity\Trainer;

class GameLoop
{
    public function run(Trainer $trainer)
    {
        SystemUtils::speakMessage("The player {$trainer->getName()}");
        SystemUtils::speakMessage("A wild bulbassaur appears.");
    }
}