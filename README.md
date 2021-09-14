# Projet Guess

## Challenge 1:

Nous avons créé une VM pour éviter le proxy du lycée et pouvoir télécharger le projet ainsi que php 7.4 et composer afin de pouvoir tester nos code avec phpUnit pour la suite du projet.

## Challenge 2:

Nous avons utilisé l'IDE "Visual Studio Code" avec lequel nous avons pu programmer nos premier test Unitaire. 
On a commencé par coder la méthode compare de la class Cardgame32 puis effectuer nos test dans "CardTest" puis la méthode __toString qui nous a permis de récupérer le nom de la carte ainsi que sa couleur en chaîne de caractère.

## Challenge 3: 

Dans le challenge 3 nous avons créé plusieurs méthode : 
* la méthode factoryCardGame32 : qui représente notre paquet de 32 cartes.
* la méthode shuffle : qui permet de mélanger les cartes.
* la méthode getCard : qui permet de donner une carte type ('Roi de Coeur') lorsqu'on lui met en paramètre la position de la carte. 

Afin de vérifier le bon fonctionnement de notre programme nous avons testé nos méthodes dans CardGame32Test.

## Challenge 4:

Dans le challenge 4 nous nous sommes occupées du fonctionnement du jeu. 
Nous avons permis à l'utilisateur d'avoir une aide lui indiquant si la position de la carte était + ou - élevé que son estimation.
Nous avons ajouté l'utilisateur chanceux ou non selon si son nombre d'essai était supérieur ou non au logarithme binaire de 32 (le nombre de cartes totales dans un jeu).

## Lien vers le dépôt initial:

https://gitlab.com/okpu/guesswhat
