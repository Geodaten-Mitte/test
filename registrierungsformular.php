<center><h2>Bestellliste</h2>
<?php
// Lesen der Datei
$dateinamen = "users.txt";
$handle = fopen ($dateinamen, "r");
$inhalt = fread ($handle, filesize ($dateinamen));
fclose ($handle);
?>
<form action="registrierung.php" method="post">
Mitarbeiter (Vor- und Zuname): <input type="text" name="mitarbeiter"><br><br>
Artikelname: <input type="text" name="artikelname"><br><br>
Anbieter 1: <input type="text" name="anbieter1">
Preis: <input type="text" name="preis1">
Internetseite (Quelle)*: <input type="text" name="internet1"><br><br>
Anbieter 2: <input type="text" name="anbieter2">
Preis: <input type="text" name="preis2">
Internetseite (Quelle)*: <input type="text" name="internet2"><br><br>
* am besten aus Browser Kopieren<br><br>
<input type="submit" value="Registrieren">
<input type="button" name="Mail" value="E-Mail (Anmerkung an Verwaltungsleitung)" onclick="window.location.replace('mailto:christoph.blank@ba-mitte.berlin.de')">
</form></center>
<?php
$zitate = file("users.txt");
for($i=0;$i < count($zitate); $i++){
   echo $i.". ".$zitate[$i]."<br><br>";
}
?>
