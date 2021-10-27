
<?php
session_start()
?>
<link rel="stylesheet" href="style.css" type="text/css"/>

<form action="index.php" method="POST" >
<div class="survey">
<p><b>Подвижный холм песка в пустыне называется:</b></p>
<input type="Radio" name="vote" value="1" >Дюна<br>
<input type="Radio" name="vote" value="2" >Утес<br>
<input type="Radio" name="vote" value="3">Скала<br>



<p><b>Подвижный холм песка в пустыне называется:</b></p>
<input type="Radio" name="vote2" value="4" >Дюна<br>
<input type="Radio" name="vote2" value="5" >Утес<br>
<input type="Radio" name="vote2" value="6" >Скала<br>

<p><b>Подвижный холм песка в пустыне называется:</b></p>
<input type="Radio" name="vote3" value="7" >Дюна<br>
<input type="Radio" name="vote3" value="8" >Утес<br>
<input type="Radio" name="vote3" value="9" >Скала<br>

<p><b>Подвижный холм песка в пустыне называется:</b></p>
<input type="Radio" name="vote4" value="10" >Дюна<br>
<input type="Radio" name="vote4" value="11" >Утес<br>
<input type="Radio" name="vote4" value="12" >Скала<br>

<p><b>Подвижный холм песка в пустыне называется:</b></p>
<input type="Radio" name="vote5" value="13" >Дюна<br>
<input type="Radio" name="vote5" value="14" >Утес<br>
<input type="Radio" name="vote5" value="15" >Скала<br>

<input type="Submit" value=" ok" class="knob" >
</form>
</div>
<?php
if(isset($_SESSION["ansver"])){
    echo  $_SESSION["ansver"];
}
?>

