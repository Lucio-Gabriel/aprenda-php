<?php

class Computer 
{
    var $cpu;
    function power()
    {
        echo "Ligando computador a {$this->cpu}...";
    }
}

$obj = new Computer();
$obj->cpu = "500Mhz";
$obj->power();
