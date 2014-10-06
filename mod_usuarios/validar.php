<?php
if(isset($_POST['valor'])){
	$user=strip_tags($_POST['valor']);
	require_once("../mod_conexiones/conexion.php");
	conectar();
	$query=@mysql_query('select * from usuarios where codusr="'.mysql_real_escape_string($user).' " ');
	if (mysql_num_rows($query)<=0){
		echo 'Usuario Incorrecto';
	}else{
		echo '';
	}
	

}//LE ESTAMOS INDICANDO QUE SI LA VARIABLE POST DE NOMBRE valor contiene datos, la imprimimos con un echo
?>
