<?php
	$controller = ucwords($controller); //convierte primera letra en mayuscula para que los servidores lo lean correctamente cuando son sensibles a mayusculas y minusculas
	$controllerFile = "Controllers/".$controller.".php";
	if(file_exists($controllerFile))
	{
		require_once($controllerFile);
		$controller = new $controller();
		if(method_exists($controller, $method))
		{
			$controller->{$method}($params);
		}else{
			require_once("Controllers/Error.php");
		}
	}else{
		require_once("Controllers/Error.php");
	}

 ?>