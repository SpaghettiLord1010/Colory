<html>
<center>
<?php
$color = $_GET['color'];
$backcolor = $_GET['bgcolor'];

list($colorr, $colorg, $colorb) = sscanf($color, "#%02x%02x%02x");
list($backcolorr, $backcolorg, $backcolorb) = sscanf($backcolor, "#%02x%02x%02x");

if($colorr > $backcolorr){
	$diffred = $colorr-$backcolorr;
}
else{
	$diffred = $backcolorr-$colorr;
}
if($colorg > $backcolorg){
	$diffgreen = $colorg-$backcolorg;
}
else{
	$diffgreen = $backcolorg-$colorg;
}
if($colorb > $backcolorb){
	$diffblue = $colorb-$backcolorb;
}
else{
	$diffblue = $backcolorb-$colorb;
}


echo "<table style='background-color:" . $backcolor . "'><th>";
echo "<p style='font-size:2em;'>The exact color was: " . $backcolor . "<br/>Which is in RGB: " . $backcolorr . ", " . $backcolorg . ", " . $backcolorb . ".</p>";
echo "<p style='color:white; font-size:2em;'>The exact color was: " . $backcolor . "<br/>Which is in RGB: " . $backcolorr . ", " . $backcolorg . ", " . $backcolorb . ".</p>";
echo "</th></table>";
echo "<br/>";
echo "<table style='background-color:" . $color . "'><th>";
echo "<p style='font-size:2em;'>The guessed color was: " . $color  . "<br/>Which is in RGB: " . $colorr . ", " . $colorg . ", " . $colorb . ".</p>";
echo "<p style='color:white; font-size:2em;'>The guessed color was: " . $color  . "<br/>Which is in RGB: " . $colorr . ", " . $colorg . ", " . $colorb . ".</p>";
echo "</th></table>";
echo "<br/><br/>";
echo "<h1 style='font-size:5em;'>That is an overall accuracy of:</h1></br><h1 style='font-size:5em'>" . (100-(($diffred+$diffgreen+$diffblue)/(256*256*256)*100*100*100)) . "%</h1><br/><br/><hr/><br/><br/><p style='font-size:2.5em'>";
echo $diffred . " points for RED - that is an miss of " . $diffred/256*100 . "%<br/>";
echo $diffgreen . " points for GREEN - that is an miss of " . $diffgreen/256*100 . "%<br/>";
echo $diffblue . " points for BLUE - that is an miss of " . $diffblue/256*100 . "%<br/></p>";
echo "<br/><br/><a style='font-size:3em;' href='index.php'>Play Another Round!</a>";
?>
<center>
</html>