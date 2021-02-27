<html>
<center>
<form action='result.php' method='get'>
<input type="color" name="color" style="display:block; width:100%; height:15%; font-size:10em;"></input>
<br/>
<input type="hidden" name="bgcolor" value=<?php echo $_GET['bgcolor']; ?>></input>
<input type="submit" value="Guess!" style="display:block; width:100%; height:80%; font-size:10em;"></input>
</form>
<center>
</html>