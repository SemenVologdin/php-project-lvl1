<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;

function run()
{
    line("Welcome to the Brain Games!");
    $strName = prompt("May I have your name?");
    line("Hello, {$strName}");
}
