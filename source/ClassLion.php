<?php

namespace TiRiProject\Animals;

class Lion extends AbstractAnimal
{
    public function crier(){
        $resultat = 'Grahou !' . PHP_EOL;
        echo $resultat;
        return $resultat;
    }

}
