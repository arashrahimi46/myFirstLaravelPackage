<?php

namespace Arash\Greet;

class Greet
{
    public function greet(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}
