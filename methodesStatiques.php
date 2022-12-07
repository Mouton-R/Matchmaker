<?php

declare(strict_types=1);

class Pont
{
    public static int $nombrePietons = 0;
    
    public function nouveauPieton()
    {
        self::$nombrePietons++;
    }
}

$pontLondres = new Pont;
$pontLondres->nouveauPieton();

$pontManhattan = new Pont;
$pontManhattan->nouveauPieton();

echo Pont::$nombrePietons;
