<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Dane użytkownika</h3>
    <form method="get">
      <input type="text" name="surname"><br><br>
      <input type="submit" value="Zatwierdź"><hr>
    </form>
    <?php
    if(!empty($_GET['surname'])){
      $surname = $_GET['surname'];
      if(strlen(trim($_GET['surname']))){
        echo <<<TEXT
          nazwisko: $surname<br>
          TEXT;
      }
      else{
        echo "Nie wprowadzaj tylko białych znaków";
      }
    }
    print_r($_GET);
    ?>
  </body>
</html>
