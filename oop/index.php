<?php
require ("animal.php");
require ("frog.php");
require ("ape.php");
$sheep = new Animal("shaun");

echo "name : " . $sheep->name ."<br>"; // "shaun"
echo "legs : " . $sheep->legs ."<br>"; // 4
echo "cold blooded : " . $sheep->cold_blooded ."<br><br>"; // "no"

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

$sungokong = new Ape("kera sakti");
echo "name : " . $sungokong->name ."<br>";
echo "legs : " . $sungokong->legs ."<br>";
echo "cold blooded : " . $sungokong->cold_blooded ."<br>";
echo "yell : " . $sungokong->yell() ."<br><br>"; // "Auooo"

$kodok = new Frog("buduk");
echo "name : " . $kodok->name ."<br>";
echo "legs : " . $kodok->legs ."<br>";
echo "cold blooded : " . $kodok->cold_blooded ."<br>";
echo "jump : " . $kodok->jump() ."<br>"; // "hop hop"
