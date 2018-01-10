<?php 

	class EnlacesPaginas{

		public function enlacesPaginasModel($enlacesModel){

			if ($enlacesModel == "nosotros"||
				$enlacesModel == "contactanos"||
				$enlacesModel == "servicios") {
				
				$module = "views/modules/".$enlacesModel.".php";

			}else if($enlacesModel == "index"){
				$module = "views/modules/inicio.php";
			}
			return $module;
		}
	}

?>