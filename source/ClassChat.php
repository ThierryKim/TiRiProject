<?php

namespace TiRiProject\Animals;

class Chat extends AbstractAnimal
{

    public function crier(){
        $resultat = 'Miaou !' . PHP_EOL;
        echo $resultat;
        return $resultat;
    }

}
