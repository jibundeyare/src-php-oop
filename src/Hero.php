<?php
namespace App;

use App\Character;

class Hero extends Character
{
    private $lives;

    public function __construct($name, $hp, $mp, $lives = 3)
    {
        parent::__construct($name, $hp, $mp);
        $this->lives = $lives;
    }

    public function getLives()
    {
        return $this->lives;
    }

    public function sayHello()
    {
        return "Je suis le héros et je m'appelle {$this->name}";
    }

    public function revive()
    {
        if ($this->isDead() && $this->lives) {
            $this->hp = 100;
            $this->lives = $this->lives - 1;
        }
    }
}
