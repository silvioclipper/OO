<?php

declare(strict_types=1);

namespace Code\Controller;
class Client{

    public function teste(int $teste) :int{
        return $teste;
    }

    public $props = [];
    public function Pagar(){
        return 'paguei...';
    }

    public function __set($name, $value)
    {
        return $this->props[$name] = $value;
    }

    public function __get($name)
    {
        return $this->props[$name];
    }

    public function __toString()
    {
        return "teste";
    }

}