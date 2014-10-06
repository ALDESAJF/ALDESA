<?php
	session_start();
	session_destroy();
?>

<!DOCTYPE HTML>
<html lang="es">
    <head>
    	<meta charset='utf-8'>
    	<link rel="stylesheet" type="text/css" href="CSS/estilos.css" />
        <title></title>
        <style>
			select{
				width:95%;
				background: #eee;
				background-position: 95% center;
				background-repeat: no-repeat;
				font-family: Helvetica, Arial, sans-serif;
				padding: 9px 17px;
				font-weight: bold;
				line-height: 1;
				color: #444;
				border: none;
				text-shadow: 0 1px 1px rgba(255, 255, 255, 0.85);
				background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#fff), to(#bbb));
				background-image: -moz-linear-gradient(0% 100% 90deg, #BBBBBB, #FFFFFF);
				background-color: #fff;
				border: 1px solid #f1f1f1;
				border-radius: 10px;
				box-shadow: 0 1px 2px rgba(0, 0, 0, 0.5);
				font-size: 15px;
				border-radius: 3px;
				-webkit-appearance: none;
				-webkit-transition: all 0.4s;
				-moz-transition: all 0.4s;
				transition: all 0.4s;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.3);
			}
			
			select:hover{
				background-color: #ddd;
			}
			
			#BODY {
				background-color: #244D77;
				background-image: url(...);
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-position: center top;
				background-size: 100%;
				P {font-size: 24pt;
			}
			
		</style>
         <script type="text/javascript" src="js/ajax.js"></script>
	</head>
	<body id="BODY">	
		<section>
			<article>
			<div id="contenedorf1">
				<form id="f1"  name="f1" method="post" action="login.php"  style="opacity:0.8">
					<h2>Ingreso al Sistema</h2>
					<hr id="ray"><br>
                    <div id="cuerpo" style="color:#F00"></div>
					<input type="text" name="user" id="user" placeholder="Usuario" onBlur="recibe(1);"><br><br>
					<input type="password" name="pass" placeholder="Contraseña" onBlur="recibe(2);"><br><br>
                    <select name="sucursal"  id="sucursal" onchange="Npos()">
                   	<?php
						 require_once('/mod_sucursales/sucursales.php');
						 ListarSucursales();
					 ?>
                    <select/>
                    <p>
                    <br>
					<input type="button" name="Ingresar" value="Ingresar" onclick="cambiaTitulo();"><br>
                    <a href="">Recuperar Contraseña</a>
					</p>
                    <div class="button">
			        	<a>Almacenes de Depósitos S.A.</a>
		            </div>
				</form>
			</div>
			</article>
		</section>
        <script language="Javascript" type="text/javascript">
			var conta=1
			
            document.oncontextmenu=function(){
				return false;
			}
            
			function Ingresar(){
				document.f1.action="login.php";
				document.f1.submit();
			}
            
            function cambiaTitulo(){
				document.title="("+conta+") ALDESA HN";
				conta++;
			}
            
		</script>
	</body>
</html>

