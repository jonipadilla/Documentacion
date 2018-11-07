<br><br><h1 align="center">Asistencia de Socio </h1>
<div align="center"><br>
    <form id="form" action='<?php echo base_url('index.php/casistenciaSocio/buscar')?>' method="post">
       <input name="dni" type="text" placeholder="DNI"> <br/> <br/>
    <br/>
	<input type="submit" class="btn btn-primary" value="Ingresar">

	</form>	
	<?= (isset($resul)) ? $resul : ""?>

</div>