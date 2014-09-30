<?PHP
	session_start();
	require_once('funciones.php');
	conectar('localhost','root','Aldesahn','contabilidad');
	$existe=false;
	
	//Recibir informacion
	$user=strip_tags($_POST['user']);
	$pass=strip_tags(sha1($_POST['pass']));
	$sucursal=strip_tags($_POST['sucursal']);
	$no_sucursal=strip_tags($_POST['valor']);
	
	$query=@mysql_query('select * from contabilidad.usuarios where codusr="'.mysql_real_escape_string($user).'" and pswrd="'.mysql_real_escape_string($pass).'"');
	while($pasa=@mysql_fetch_array($query)){
		$_SESSION['nomusr']=$pasa['nomusr'];
		$existe=true;
	}
	
	if($existe){
		$_SESSION['logged']='yes';
		$_SESSION['user']=$user;
		$_SESSION['suc']=$sucursal;
		$_SESSION['no_suc']=$no_sucursal;
		if($_SESSION['no_suc']==0){
			echo '<script>window.location="administrador.php"</script>';	 	
		}
		echo '<script>window.location="menu.php"</script>';	 	
	}else{
		session_destroy();
		echo '<script>alert("Usuario y/o Password erroneos!")</script>';
		echo '<script>window.location="Index.php"</script>';	
	}
?>