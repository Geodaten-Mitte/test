<?php
$mitarbeiter = $_POST['mitarbeiter'];
$artikelname = $_POST['artikelname'];
$anbieter1 = $_POST['anbieter1'];
$preis1 = $_POST['preis1'];
$internet1 = $_POST['internet1'];
$anbieter2 = $_POST['anbieter2'];
$preis2 = $_POST['preis2'];
$internet2 = $_POST['internet2'];
$mitarbeiter_info = array("<b>Mitarbeiter </b>", $mitarbeiter);
$artikel_info = array("<b>Artikelname </b>", $artikelname);
$anbieter1_info = array("<b>1. Anbieter </b>", $anbieter1, $preis1); 
$anbieter1internet_info = array("<a href=", $internet1, ">Quelle</a>"); 
$anbieter2_info = array("<b>2. Anbieter </b>", $anbieter2, $preis2);
$anbieter2internet_info = array("<a href=", $internet2, ">Quelle</a>"); 
 
if(!empty($artikelname)) {
   $eintrag1 = implode(" ", $mitarbeiter_info).", ";
   $eintrag2 = implode(" ", $artikel_info).", ";
   $eintrag3 = implode(" ", $anbieter1_info)." ";
   $eintrag4 = implode("", $anbieter1internet_info).", ";
   $eintrag5 = implode(" ", $anbieter2_info)." ";
   $eintrag6 = implode("", $anbieter2internet_info)."\r\n";
   file_put_contents("users.txt", $eintrag1, FILE_APPEND);
   file_put_contents("users.txt", $eintrag2, FILE_APPEND);
   file_put_contents("users.txt", $eintrag3, FILE_APPEND);
   file_put_contents("users.txt", $eintrag4, FILE_APPEND);
   file_put_contents("users.txt", $eintrag5, FILE_APPEND);
   file_put_contents("users.txt", $eintrag6, FILE_APPEND);
   echo "Neuer Artikel wurde in in die Bestellliste aufgenommen  ";
   echo '<a href="registrierungsformular.php">zurück zum Formular</a>';
} else {
   echo "Bitte alle Felder ausfüllen";
}
?>
