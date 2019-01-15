<?php
use App\Hero;
use App\Vilain;
use App\Fight;

require __DIR__.'/../vendor/autoload.php';

$h = new Hero('Toto', 100, 100);
echo $h->getName().'<br>';
echo $h->getHP().'<br>';
echo $h->getMP().'<br>';
echo ($h->isDead() ? 'oui':'non').'<br>';
echo $h->getLives().'<br>';

$v = new Vilain('Barbare', 10, 10);
echo $v->getName().'<br>';
echo $v->getHP().'<br>';
echo $v->getMP().'<br>';
echo ($v->isDead() ? 'oui':'non').'<br>';

$f = new Fight();
$f->setFighters($h, $v);

while (!$f->isOver()) {
    $f->round();
}

$winner = $f->getWinner();
echo "Le gagnant est {$winner->getName()}<br>";
echo $winner->getHP().'<br>';
echo $winner->getMP().'<br>';
