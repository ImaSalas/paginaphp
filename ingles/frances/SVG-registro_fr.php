<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>joint à notre projet</h1>

<p>Si vous avez besoin de plus d'informations, nous serons heureux de vous expliquer tout notre travail.</p>


<form name="FORM" method="POST" action="">
<label>
<span>nom :</span>
<input type="text" name="NOM">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar_fr"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr_fr.php");
}

?>


</div>
<!-- cerro inner -->


</div>

