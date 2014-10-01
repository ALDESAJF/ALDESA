<?php
	//session_start();
	function ListarSucursales(){
		require_once('mod_conexiones/conexion.php');  
		conectar();
		echo '<option>ADMINISTRADOR</option>';
		$sql=mysql_query('select * from sucursales order by centro asc'); 
		con.close;
		while($sucursales=mysql_fetch_array($sql)){
			echo '<option value="'.$sucursales['centro'].'">'.$sucursales['nombre'].'</option>';
		}
	}
?>
