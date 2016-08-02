<?php
/**
 * Created by Jeremy
 * Date: 26/07/2016
 * Time: 23:20
 */

namespace TiRiProject\Animals;

abstract class AbstractAnimal
{
    protected function foo()
    {
        // Cette méthode foo() ne sert à rien du tout (c'est vrai)
        return true;
    }

    abstract public function crier();


}