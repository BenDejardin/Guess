<?php

namespace App\Tests\Core;

use App\Core\CardGame32;
use PHPUnit\Framework\TestCase;
use App\Core\Card;

class CardGame32Test extends TestCase
{
    public function testShuffle()
  {
    $cardGame = CardGame32 ::factorycardGame32();
    $cardGame->shuffle();
    $cardGame2 = CardGame32 ::factorycardGame32();
    $this-> assertNotEquals($cardGame2, $cardGame);
  }

  public function testGetCard()
  {
    $cardGame = CardGame32 :: factoryCardGame32();
    $this->assertEquals('7 de Trèfle',$cardGame->getCard(0));

    $cardGame = CardGame32 :: factoryCardGame32();
    $this->assertEquals('7 de Trèfle',$cardGame->getCard(32));


    $cardGame = CardGame32 :: factoryCardGame32();
    $this->assertEquals('7 de Trèfle',$cardGame->getCard(-64));
  }
}