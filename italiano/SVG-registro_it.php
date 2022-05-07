<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>aderice il nostro progetto</h1>

<p>Se hai bisogno di maggiori informazioni saremo felici di spiegarti tutto il nostro lavoro.</p>


<form name="FORM" method="POST" action="">
<label>
<span>nome :</span>
<input type="text" name="NOMBRE">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar_it"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr_it.php");
}

?>


</div>
<!-- cerro inner -->


</div>

