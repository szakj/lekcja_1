<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name='Krystyna';
    echo 'Imię: $name<br>';
    echo "Imię: $name<br>";
    echo 'tekst<br>';

    //typy danych
    //boolean
      //zapisuj zmienne bez polskich znaków w języku angielskim
      $prawda = true;
      $fałsz = false;

      echo $prawda; //1
      echo $fałsz; //1

    //integer
      $bin = 0b1010; //10
      $dec = 10; //10
      $oct = 010; //8
      $hex = 0x10; //16

      echo $bin;

    //składnia heredoc
      $name = 'Anna';
      $surname = 'Nowak';
      $text = <<<LABEL
      Heredoc<br>
      Imię: $name,
      Nazwisko: $surname;
      <hr>
    LABEL;

      echo $text;

      echo <<<L
      Heredoc 2<br>
      Imię: $name<br>
    L;

    //składnia nowdoc
      echo <<<'L'
      Nowdoc <br>
      Imię: $name<hr>
    L;

    $city = 'Poznań';
    echo "Nazwa zmiennej: \$city, wartość: $city";





     ?>
  </body>
</html>
