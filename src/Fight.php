<?php
namespace App;

class Fight
{
    private $fighter1;
    private $fighter2;
    private $over = false;
    private $winner;

    public function setFighters($fighter1, $fighter2)
    {
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
        $this->over = false;
    }

    public function isOver()
    {
        return $this->over;
    }

    public function getWinner()
    {
        return $this->winner;
    }

    public function round()
    {
        $this->_round($this->fighter1, $this->fighter2);
        $this->_round($this->fighter2, $this->fighter1);
    }

    private function _round($a, $b)
    {
        if (!$this->isOver()) {
            $energy = $a->attack(5);
            $b->loseHP($energy);

            if ($b->isDead()) {
                $this->over = true;
                $this->winner = $a;
            }
        }
    }
}
