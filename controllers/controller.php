<?php 

class MvcController{

	/*==============================================
	=            llamada a la plantilla            =
	==============================================*/
	public function plantilla(){
		include "views/template.php";
	}	
	/*=====  End of llamada a la plantilla  ======*/
	
	/*================================================
	=            interaccion del usuario             =
	================================================*/
	public function enlacesPaginasController(){

		if (isset($_GET["action"])) {
			$enlacesController = $_GET["action"];
		}else{
			$enlacesController = "index";
		}

		$enlacesController = $_GET["action"];
		$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}

	/*=====  End of interaccion del usuario   ======*/


}

?>