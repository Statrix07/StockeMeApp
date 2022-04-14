<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <?php
    echo "Versuche Verbindungsaufbau zur Datenbank";
    echo "<br>";
    //Verbindung zur Datenbank herstellen
    $db = new mysqli("10.35.232.77:3306","k174708_db","mJl70!m0","k174708_stockmeapp");
    //Verbindungsaufbau prüfen
    if ($db->connect_errno>0)
      echo "Verbindungsaufbau fehlgeschlagen";
    else
      echo "Verbindungsaufbau erfolgreich";


// verschiedene Listen?
// aber sonst nach Vorbild unseres Prototypen
// Normal und Mindestbestand wann wieder was auf die Liste kommt
// mehr Tabellen <=> Beziehung zwischeneinander
   ?>

  <body>


  </body>
</html>
