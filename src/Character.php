<?php
namespace App;

class Character
{
    protected $name;
    protected $hp;
    protected $mp;

    public function __construct($name, $hp, $mp)
    {
        $this->name = $name;
        $this->hp = $hp;
        $this->mp = $mp;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getHP()
    {
        return $this->hp;
    }

    public function getMP()
    {
        return $this->mp;
    }

    public function attack($energy)
    {
        if ($this->mp < $energy) {
            return 0;
        }

        $this->mp = $this->mp - $energy;

        return $energy;
    }

    public function loseHP($hp)
    {
        if ($this->isDead()) {
            return;
        }

        $this->hp = $this->hp - $hp;
    }

    public function isDead()
    {
        if ($this->hp <= 0) {
            return true;
        }

        return false;
    }
}
