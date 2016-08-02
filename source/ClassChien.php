<?php

namespace TiRiProject\Animals;

class Chien extends AbstractAnimal
{
    public function crier(){
        $resultat = 'Waf !' . PHP_EOL;
        echo $resultat;
        return $resultat;
    }

}
