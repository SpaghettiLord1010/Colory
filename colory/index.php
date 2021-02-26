<html>

<?php
$bgcolor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
echo "<meta http-equiv='refresh' content=5;url=color-pick.php?bgcolor=" . str_replace("#", "%23", $bgcolor) .  ">";
echo "<body style='background-color:" . $bgcolor . "'>";
?>
<center>
<img height=50% widht=50% src="countdown.gif"/>
</center>
</body>
</html>