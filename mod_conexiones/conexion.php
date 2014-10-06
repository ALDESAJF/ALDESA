<?php
	$con;
	function conectar(){
		$servidor='localhost';
		$user='root';
		$pass='Aldesahn';
		$name='contabilidad';
		$con=@mysql_connect($servidor,$user,$pass);
		@mysql_select_db($name,$con);
	}
	function cerrar(){
		$con.close;
	}
?>