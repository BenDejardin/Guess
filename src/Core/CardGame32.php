<?php

namespace App\Core;

/**
 * Class CardGame32 : un jeu de cartes.
 * @package App\Core
 */
class CardGame32
{
  /**
   * @var $cards array a array of Cards
   */
  private $cards;

  /**
   * Guess constructor.
   * @param array $cards
   */
  public function __construct(array $cards) 
  {
    $this->cards = $cards;
  }

  /**
   * Brasse le jeu de cartes
   */
  public function shuffle()
  {
    shuffle($this->cards); 
  }


  /** définir une relation d'ordre entre instance de Card.
   * à valeur égale (name) c'est l'ordre de la couleur qui prime
   * Trèfle> Coeur > Pique > Carreaux
   * Attention : si AS de Coeur est plus fort que AS de Trèfle,
   * 2 de Coeur sera cependant plus faible que 3 de Trèfle
   *
   *  Remarque : cette méthode n'est pas de portée d'instance (static)
   *
   * @see https://www.php.net/manual/fr/function.usort.php
   *
   * @param $c1 Card
   * @param $c2 Card
   * @return int
   * <ul>
   *  <li> zéro si $c1 et $c2 sont considérés comme égaux </li>
   *  <li> -1 si $c1 est considéré inférieur à $c2</li>
   * <li> +1 si $c1 est considéré supérieur à $c2</li>
   * </ul>
   *
   */
  public static function compare(Card $c1, Card $c2) : int
  {

    $c1Name = strtolower($c1->getName());
    $c2Name = strtolower($c2->getName());

    $c1Color = strtolower($c1->getColor());
    $c2Color = strtolower($c2->getColor());

    $orderColor = ['trèfle' => 4, 'coeur' => 3, 'pique' => 2, 'carreau' => 1];
    $orderName = ['2' => 1, '3' => 2, '4' => 3, '5' => 4, '6' => 5, '7' => 6, '8' => 7, '9' => 8, '10' => 9, 'valet' => 10, 'dame' => 11, 'roi' => 12, 'as' => 13];

    if ($orderName[$c1Name] === $orderName[$c2Name]) {
      
      if($orderColor[$c1Color] === $orderColor[$c2Color]){
        return 0;
      }  
      return ($orderColor[$c1Color] > $orderColor[$c2Color]) ? +1 : -1;
      
    }
    return ($orderName[$c1Name] > $orderName[$c2Name]) ? +1 : -1;
  }

 /**
  * Guess factoryCardGame32 
  * elle représent le jeu de 32 cartes.
  */
  public static function factoryCardGame32() : CardGame32 {

    $cardGame = new CardGame32([
      new Card('7', 'Trèfle') ,
      new Card('8', 'Trèfle') ,
      new Card('9', 'Trèfle') ,
      new Card('10', 'Trèfle') ,
      new Card('Valet', 'Trèfle'),
      new Card('Dame', 'Trèfle'),
      new Card('Roi', 'Trèfle'),
      new Card('As', 'Trèfle'),
      new Card('7', 'Coeur') ,
      new Card('8', 'Coeur') ,
      new Card('9', 'Coeur') ,
      new Card('10', 'Coeur') ,
      new Card('Valet', 'Coeur'),
      new Card('Dame', 'Coeur'),
      new Card('Roi', 'Coeur'),
      new Card('As', 'Coeur'),
      new Card('7', 'Pique') ,
      new Card('8', 'Pique') ,
      new Card('9', 'Pique') ,
      new Card('10', 'Pique') ,
      new Card('Valet', 'Pique'),
      new Card('Dame', 'Pique'),
      new Card('Roi', 'Pique'),
      new Card('As', 'Pique'),
      new Card('7', 'Carreau') ,
      new Card('8', 'Carreau') ,
      new Card('9', 'Carreau') ,
      new Card('10', 'Carreau') ,
      new Card('Valet', 'Carreau'),
      new Card('Dame', 'Carreau'),
      new Card('Roi', 'Carreau'),
      new Card('As', 'Carreau')
    ]);

    return $cardGame;
  }

  /**
   * Guess getCard
   * @param $index (représente la position de la carte)
   * Elle permet de nous donner la carte selon sa position 
   */
  public function getCard($index) : Card {
    if ($index > 31){
      $index = $index % 32;
    }

    while ($index < 0){
      $index = 32 + $index; 
    }

    return  $this->cards[$index];
  }

}

