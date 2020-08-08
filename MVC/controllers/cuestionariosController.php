<?php
//Llamada al modelo
require_once("models/cuestionariosModel.php");

if(isset($_GET["accion"])){

switch ($_GET["accion"]) {
	case 'crearcuestionario':

		require("views/cuestionarios/form_crearcuestionario_view.phtml");
		break;

		case 'guardarnuevocuestionario':
			$cuestionario = new cuestionariosModel();
			$cuestionario->saveNewcuestionario($_POST);

			$datos=$cuestionario->getcuestionarios();
            require_once("views/cuestionarios/cuestionarios_view.phtml");

			break;

			case 'vercuestionario':
				$cuestionario = new cuestionariosModel();
				$datos = $cuestionario->getcuestionario($_GET["id"]);
                require_once("views/cuestionarios/cuestionario_view.phtml");

				break;

			case 'borrarcuestionario':
				$cuestionario = new cuestionariosModel();
				$datos = $cuestionario->deletecuestionario($_GET["id"]);

				$datos=$cuestionario->getcuestionarios();
            require_once("views/cuestionarios/cuestionarios_view.phtml");
				break;

			case 'actualizarcuestionario':
				$cuestionario = new cuestionariosModel();
				$datos = $cuestionario->getcuestionario($_GET["id"]);

			   require("views/cuestionarios/form_actualizarcuestionario_view.phtml");

				break;

			case 'guardaractualizacioncuestionario':
			
			$cuestionario = new cuestionariosModel();
			
			$cuestionario->guardarActualizacioncuestionario($_POST);

			$datos=$cuestionario->getcuestionarios();
            require_once("views/cuestionarios/cuestionarios_view.phtml");


				break;
	
	
}

}else{

$per=new cuestionariosModel();

$datos=$per->getcuestionarios();

//Llamada a la vista
require_once("views/cuestionarios/cuestionarios_view.phtml");

}


?>
