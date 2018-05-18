 <?php 
$Diameter = 8;
$PI = 3.14;

$Omtrek = 2 * $Diameter * $PI;
echo $Omtrek;
?>
<br>
<?php 
$Naam = "Daytona";
$Naam2 ="Aerts";
$VolledigeNaam = $Naam . " " .$Naam2;

echo $VolledigeNaam;
?>
<br>
<?php 
$Getal = 102245755557;

if ($Getal <= 1000)
{
  echo "kilo";
}
else if ($Getal <= 1000000)
{
  echo "mega";
}
else if ($Getal <= 1000000000)
{
  echo "giga";
}
else
{
  echo "tera";
}
?>
<br>
<?php
$Getal = 3;

if ($Getal % 2 == 0)
{
  echo "Even";
}
else 
{
  echo "oneven!";
}
?>
<br>
<?php 
$getal = 3;
 
for ($i = 1; $i <= 10; $i++)
{
  $uitkomst = $i * $getal;

?> 

<br>
<?php
echo $i . "X" . $getal . "=" . $uitkomst;
}
?>
<br>
<?php
$Array1 = Array("hallo", "ik", "ben", "daytona", "en", "zen", "zestien", "jaar", "ole", "oke");

for ($i = 0; $i < 10; $i++) {
    echo $Array1 [$i];
    echo " ";
      

}
?>
<br>
<?php
$MijnArray = Array(7,9,5);
  
echo $MijnArray[0];
echo $MijnArray[2];
?>
<br>
<?php 
$gemetentemperaturen = Array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$som = 0;
for ($i = 0; $i < count($gemetentemperaturen); $i++) 
{
  $som = $som + $gemetentemperaturen[$i];
} 
$gem = $som / count($gemetentemperaturen);
echo $gem;
?>
<br>
<?php
$gemetentemperaturen = Array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$hoogste = 0;
for ($i = 0; $i < count($gemetentemperaturen); $i++) {
  if ($gemetentemperaturen[$i] > $hoogste) {
    $hoogste = $gemetentemperaturen[$i];
  }
}
echo $hoogste;
?>
<br>
<?php 
$keer = 0;
$gemetentemperaturen = Array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
for ($i = 0; $i < count($gemetentemperaturen); $i++) {
  if ($gemetentemperaturen[$i] == 62) {
    $keer = $keer + 1;
  }
}
echo $keer;

?>