<?php
if(isset($_POST['valor'])){
	$existepsw=false;
	$existeusr=false;
	$user=strip_tags($_POST['valor']);
	$pass=(strip_tags(sha1($_POST['valor2'])));
	require_once("../mod_conexiones/conexion.php");
	conectar();
	$query=@mysql_query('select * from usuarios where codusr="'.$user.'"');
	while($pasa=@mysql_fetch_array($query)){
		$existeusr=true;
	}
	$query=@mysql_query('select * from usuarios where pswrd="'.$pass.'"');
	while($pasa=@mysql_fetch_array($query)){
		$existepsw=true;
	}
	if($existeusr && $existepsw){
		echo 'Correcto';
	}else{
		echo 'Usuarios y/o Contraseña Incorrecto';
	}
}//LE ESTAMOS INDICANDO QUE SI LA VARIABLE POST DE NOMBRE valor contiene datos, la imprimimos con un echo
?>
