<?php

require '../../vendor/autoload.php';

echo "*** Création d'un jeu de 32 cartes.***\n";
$cardGame = App\Core\CardGame32::factoryCardGame32();
$nbCard = 32;
$log = log($nbCard, 2);

$carteChoisi = rand(0,31);


echo " ==== Instanciation du jeu, début de la partie. ==== \n";
$game =  new App\Core\Guess($cardGame, $cardGame->getCard($carteChoisi), false);
$carteChoisi--;
$essai = 0;


$terminer = False;
while ($terminer == False){
  $userCardIndex = readline("Entrez une position de carte dans le jeu : ");
  $essai++;
  $userCard = $cardGame->getCard($userCardIndex);
  if ($game->isMatch($userCard)) {
    echo "Bravo  votre carte étais le ".$cardGame->getCard($carteChoisi)."! \n";
    echo "Vous avez reussi en ".$essai." essai(s). \n";
    if ($essai <= $log){
      echo "Vous étes chanceux \n";
    }
    else{
      echo "Vous étes malchanceux \n";
    }
    $terminer = True;
  } else {
    if($carteChoisi > $userCardIndex){
      echo"C'est + \n";
    }
    else {
      echo "C'est - \n";
    }
  }
}


echo " ==== Fin prématurée de la partie ====\n";
echo "*** Terminé ***\n";