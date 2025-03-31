<?php 
$action = new Genre("Action", "Pieno di combattimenti, inseguimenti e adrenalina");
$comedy = new Genre("Comedy", "Divertente, spesso con situazioni esilaranti");

$movies = [
  new Movie("Die Hard", "John McTiernan", 1988, "https://example.com/die-hard", "Un poliziotto deve salvare ostaggi in un grattacielo.", $action),
  new Movie("Mad Max: Fury Road", "George Miller", 2015, "https://example.com/mad-max", "Un futuro post-apocalittico pieno di inseguimenti e azione.", $action),
  new Movie("The Hangover", "Todd Phillips", 2009, "https://example.com/the-hangover", "Tre amici si svegliano senza ricordi dopo una notte folle.", $comedy),
  new Movie("Superbad", "Greg Mottola", 2007, "https://example.com/superbad", "Due adolescenti cercano di organizzare una festa indimenticabile.", $comedy),
  new Movie("Lethal Weapon", "Richard Donner", 1987, "https://example.com/lethal-weapon", "Due poliziotti molto diversi devono lavorare insieme.", $action)
];
?>