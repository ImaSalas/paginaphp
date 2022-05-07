<div id="registro"  class="seccion confoto">

<!-- cerro inner -->
<div class="inner" id="registroinner">

<h1>únete al proyecto</h1>

<p>Si necesitas más información estaremos encantados de explicarte todo nuestro trabajo.</p>


<form name="FORM" method="POST" action="">
<label>
<span>nombre :</span>
<input type="text" name="NOMBRE">
</label>

<label>
<span>e-mail :</span>
<input type="text" name="EMAIL">
</label>

<div id="separador" style="height:20px"></div>
<center><button type="submit" name="submit" class="boton icono enviar"></button></center>
</form>

<?php

if(isset($_POST['submit'])){
	require("registr.php");
}

?>


</div>
<!-- cerro inner -->


</div>

