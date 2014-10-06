var xmlhttp;
function load(str, url, cfunc){
	if (window.XMLHttpRequest){
		xmlhttp=new XMLHttpRequest();
	}else{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=cfunc;
	xmlhttp.open("POST",url,true); // AQUÍ LE DECIMOS QUE VAMOS A ENVIAR LOS DATOS POR POST
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(str);
}

function metodoAjax(datos, ruta){ //METODO AJAX QUE RECIBE 2 PARAMETROS, LOS DATOS A ENVIAR Y EL ARCHIVO QUE LOS RECIBE
	load(datos, ruta, function(){ 
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("cuerpo").innerHTML=xmlhttp.responseText; //MOSTRAMOS LOS DATOS EN EL DIV CON ID CUERPO
		}
	}
);
}
			//------------------------------------------------------------------
function recibe(opc){		//FUNCION QUE SE EJECUTA CUANDO PRESIONAMOS EL BOTON ENVIAR
		var dato = document.getElementById('user').value;//OBTENEMOS LOS DATOS DEL CAMPO DE TEXTO
		metodoAjax("valor="+dato,"mod_usuarios/validar.php"); //EJECUTAMOS EL METODO AJAX Y LE PSASMOS LOS DATOS, Y LE DECIMOS QUE ARCHIVO ES EL QUE RECIBE LOS DATOS	
}