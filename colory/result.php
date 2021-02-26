<html>
<center>
<?php
$color = $_GET['color'];
$backcolor = $_GET['bgcolor'];

list($colorr, $colorg, $colorb) = sscanf($color, "#%02x%02x%02x");
list($backcolorr, $backcolorg, $backcolorb) = sscanf($backcolor, "#%02x%02x%02x");



echo "<table style='background-color:" . $backcolor . "'><th>";
echo "The exact color was: " . $backcolor . "<br/>Which is in RGB: " . $backcolorr . ", " . $backcolorg . ", " . $backcolorb . ".";
echo "</th></table>";
echo "<br/>";
echo "<table style='background-color:" . $color . "'><th>";
echo "The guessed color was: " . $color  . "<br/>Which is in RGB: " . $colorr . ", " . $colorg . ", " . $colorb . ".";
echo "</th></table>";
echo "<br/><br/>";
echo "<h1>That is an accuracy of:</h1><br/><br/><hr/><br/><br/>";
if($colorr >= $backcolorr){echo $backcolorr/$colorr*100 . "% for RED <br/>";}
else{echo $colorr/$backcolorr*100 . "% for RED <br/>";}
if($colorg >= $backcolorg){echo $backcolorg/$colorg*100 . "% for GREEN <br/>";}
else{echo $colorg/$backcolorg*100 . "% for GREEN <br/>";}
if($colorb >= $backcolorb){echo $backcolorb/$colorb*100 . "% for BLUE <br/>";}
else{echo $colorb/$backcolorb*100 . "% for BLUE <br/>";}
echo "<br/><br/><a href='index.php'>Play Another Round!</a>";
?>
<center>
</html>