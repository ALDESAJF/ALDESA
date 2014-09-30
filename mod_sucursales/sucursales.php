<?php
	//session_start();
	require_once('mod_conexiones/conexion.php');  
	conectar('localhost','root','Aldesahn','contabilidad');
	
	function ListarSucursales(){
		echo "<option>ADMINISTRADOR</option>";
		$sql=mysql_query('select * from sucursales order by centro asc'); 
		while($sucursales=mysql_fetch_array($sql)){
			echo "<option>".$sucursales['nombre']."</option>";
		}
	}
?>
