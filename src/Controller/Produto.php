<?php

namespace Code\Controller;

class Produto
{
    public function create(){

        return 'Produto criado';
    }

    public function __call($name, $arguments)
    {
        print $name;
    }

    public function __toString()
    {
        return 'não existe __CLASS__';
    }
}