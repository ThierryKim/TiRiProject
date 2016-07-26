<?php
/**
 * Created by Jeremy
 * Date: 26/07/2016
 * Time: 23:06
 */

$files = glob('source/*.php');
foreach ($files as $file) {
    echo "[INFO] Inclusion de {$file}" . PHP_EOL;
    require_once($file);
}

use TiRiProject\Animals\AbstractAnimal;
use TiRiProject\Animals\Chat;
use TiRiProject\Animals\Chien;
use TiRiProject\Animals\Lion;

echo <<<EOT
[SUJET]
Bonjour Thierry ! Comment ca va ?

Le but de cet exercice est de te faire voir l'Objet. Avec un grand << O >>. Et un petit exo.

Pour ceci, quelques etapes :

  Tout d'abord, il faut creer une classe AbstractAnimal. Comme je suis sympa, je t'ai déja préparé le fichier !
  Mais il manque sûrement quelques trucs dedans...

  Il faut creer trois animaux: Chien, Chat et Lion. Ils doivent heriter de la class AbstractAnimal.
  Chaque classe doit avoir le nom de son animal correspondant: "Chat" pour chat, etc...
  Chaque classe doit faire partie du namespace TiRiProject\Animals
  
  Chacun de ces animaux possede un cri unique :
    Chien:  "Waf !"
    Chat:   "Miaou !"
    Lion:   "Grahou !"
  Lorsque la methode "crier()" doit pouvoir être appelée sur chaque animal,
  je t'en fournis un exemple :
  
    function crier()
        {
            \$cri = "Ceci est un cri !" . PHP_EOL;
            echo \$cri;
    
            return \$cri;
        }

  (PHP_EOL --> saut de ligne)
  
  Bon courage !
[/SUJET]



EOT;

$cris = [
    'chien' => "Waf !" . PHP_EOL,
    'chat'  => "Miaou !" . PHP_EOL,
    'lion'  => "Grahou !" . PHP_EOL,
];

$ok      = 0;
$totalOk = 8;

echo "Est-ce que la classe abstraite propose la methode crier(): " . (method_exists(AbstractAnimal::class,
        'crier') ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;

$chien = new Chien();
echo "Test du Chien..." . PHP_EOL;
echo "Heritage: " . ($chien instanceOf AbstractAnimal ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;
echo "Cri du chien: " . ($chien->crier() == $cris['chien'] ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;
echo PHP_EOL;

$chat = new Chat();
echo "Test du Chat..." . PHP_EOL;
echo "Heritage: " . ($chat instanceOf AbstractAnimal ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;
echo "Cri du chat: " . ($chat->crier() == $cris['chat'] ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;
echo PHP_EOL;

$lion = new Lion();
echo "Test du Lion..." . PHP_EOL;
echo "Heritage: " . ($lion instanceOf AbstractAnimal ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;
echo "Cri du lion: " . ($lion->crier() == $cris['lion'] ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;
echo PHP_EOL;

echo "Test du tableau d'AbstractAnimal..." . PHP_EOL;
$animals      = [$chat, $lion, $chien, $chat, $chien, $lion];
$crisAttendus = $cris['chat'] . $cris['lion'] . $cris['chien'] . $cris['chat'] . $cris['chien'] . $cris['lion'];
$crisRecus    = "";

foreach ($animals as $animal) {
    $crisRecus .= $animal->crier();
}

echo "Resultat du test du tableau: " . ($crisAttendus === $crisRecus ? "OK! " . ++$ok . "/" . $totalOk : "KO") . PHP_EOL;

echo PHP_EOL . PHP_EOL . PHP_EOL .
    ($ok === 8
        ? "Bravo ! C'est reussi a 100% !"
        : "Dommage ! Essaie encore et defonce toi pour Septembre !");