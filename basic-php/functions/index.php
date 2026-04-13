<?php

function calculatesObesity(int $weight, float $height) 
{
    return $weight / ($height * $height);
}

echo calculatesObesity(70, 1.85);