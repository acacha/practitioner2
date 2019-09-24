<?php
$person = [
    'fullname' => 'Sergi Tur Badenas',
    'name' => 'Sergi',
    'surname' => 'Tur Badenas',
    'email' => 'sergiturbadenas@gmail.com',
];

// Objectes -> POJO POPO StdClass http://mjcarrascosa.com/la-clase-stdclass-de-php/
// de array associatiu a objecte
// 1) La vista canvia $person['name'] => $person->name

//$person = (object) [
//    'fullname' => 'Sergi Tur Badenas',
//    'name' => 'Sergi',
//    'surname' => 'Tur Badenas',
//    'email' => 'sergiturbadenas@gmail.com',
//];