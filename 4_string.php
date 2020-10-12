<?php
//przeszukiwanie ciągów znaków
$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = strstr($address, 'tel');
echo $search,'<br>';

$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = strstr($address, 'tel', true);
echo $search,'<br>';

$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = stristr($address, 'tel');
echo $search,'<br>';

echo strstr('zsk@gmail.com','@');
echo strstr('zsk@gmail.com',64);

//substr
$name = "Janusz";
echo substr($name ,3);
echo substr($name, 3, 2);

echo substr(strstr('zsk@gmail.com','@'), 1);

//przetwarzanie ciągów znaków
$replace = str_replace('%imię%', "Janusz", "Masz na imię: %imię%");
echo "<br>$replace<br>";

//zamiana polskich znaków
$login = "bączek";
$censure = array('ą','ę','ć','ń','ó','ł','ż');
$replace = array('a','e','c','n','o','l','z');

$correctlogin = str_replace($censure, $replace, $login);
echo <<<LOGIN
login: $login<br>
login po zmianie: $correctlogin<br>
LOGIN;
 ?>
