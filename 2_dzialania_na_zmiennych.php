<?php
//wersja PHP
echo
PHP_VERSION,'<br>';
//echo phpinfo()

  echo 'a','b'; //wyswietli a wyswietli b
  echo 'a'.'b'; //dodaj a i b => wyswietli ab

  $pow = 2 ** 10;
  echo"<br>$pow<br>";

//operatory bitowe
// and &, or |, xor ^, not ~, <<, >>
  $x = 0b1010;
  echo "$x<br>";

  $x = $x << 2; //101000(2) => 40
  echo "$x<br>";

  $x = >> 3; //101(2) => 5
  echo "$x<br>";


//porównanie
  $x = 1;
  $y = 1;
  echo $x <=> $y;

  if($x === $y){
    echo '<br>$x jest identyczna $y<br>';
  }else{
    echo '<br>$x nie jest identyczna $y<br>';
  }

  echo gettype($x);
  echo gettype($y);

  $x = 1;
  $x = $x++;
  echo $x; // 1
  $x = ++$x;
  echo $x; // 2
  $y = $x++;
  echo $x; // 3
  echo $y; // 2
  $y = ++$x * 2 - 1;
  echo $y; // 7

//operatory rzutowania
//bool, int, float, string, array, object, unset

  $test1='123abc5';
  $test2=0;
  $test3=10;

  echo 'Typ danych $test1: ', gettype($test1);
  $test1=(int)$test1;
  echo "<br>$test1<br>";
  echo 'Typ danych $test1: ', gettype($test1);

  echo 'Typ danych $test2: ', gettype($test2);
  $test2=(bool)$test2;
  echo "<br>$test2<br>";
  echo 'Typ danych $test2: ', gettype($test2);

  echo 'Typ danych $test3: ', gettype($test3);
  $test3=(unset)$test3;
  echo "<br>$test3<br>";
  echo 'Typ danych $test3: ', gettype($test3);

// rozmiar typu integer
  echo PHP_INT_SIZE,'<br>'; //

// kontrola typu zmiennych
// is_int(), is_string(), is_float(), is_bool(), is_null()
  $x = 1;
  echo is_int($x);
  echo is_numeric($x);

  echo is_null($x),'<hr>';

  $w;
  //echo $w;
  //operator ignorowania bledow @
  echo gettype($w);
  echo is_null($w);
?>
