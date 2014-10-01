<?php
	function conectar(){
		$servidor='localhost';
		$user='root';
		$pass='Aldesahn';
		$name='contabilidad';
		$con=@mysql_connect($servidor,$user,$pass);
		@mysql_select_db($name,$con);
	}
?>