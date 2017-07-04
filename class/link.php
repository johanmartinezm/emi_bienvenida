<?php

//
//define('VIRTUAL_LOCATION','/');
//define('VIRTUAL_LOCATION','/grupoemi/colombia/minisite/bienvenida/');
define('VIRTUAL_LOCATION','/colombia/minisite/bienvenida/');

class Link{
	
	function Build($link, $type = 'http'){	
			
		//$base = (($type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') . 'www.'.getenv('SERVER_NAME');
		$base = (($type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') . getenv('SERVER_NAME');
		
		
		// Puerto definido por default
		if (defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80' && strpos($base, 'https') === false){
			// Agrago al path el puerto
			$base .= ':' . HTTP_SERVER_PORT;
		}
		
		
		$link = $base . VIRTUAL_LOCATION . $link;
		// Devuelvo el link con Escape html
		return htmlspecialchars($link, ENT_QUOTES);
	}
	
	function toindex(){
		return self::Build('');
	}
	
	
	//CAMBIO DE LINK PARA LAS SECCIONES PRICIPALES
	function ToSeccion($seccion){
		$link = self::CleanUrlText($seccion).'/';
		return self::Build($link);
	} 
	
	
	
	// Prepara el string para enviarlo a URL
	function CleanUrlText($string){
		$string = strtolower($string);
		//cambia tildes por letras sin tilde
		$tildes=array('á','é','í','ó','ú');
		$vocales=array('a','e','i','o','u');
		$string = str_replace($tildes,$vocales,$string);
		// Remueve todos los caracteres que no son a-z, 0-9, guion, underscore o espacio
		$not_acceptable_characters_regex = '#[^-a-zA-Z0-9_ ]#';
		$string = preg_replace($not_acceptable_characters_regex, '', $string);
		// Elimino espacios en blanco al principio y final
		$string = trim($string);
		// Cambio todos los guiones, underscores y espacios a guiones
		$string = preg_replace('#[-_ ]+#', '-', $string);
		// Devuelvo el string modificado
		return $string;
		
	}
	
	
	
	/************************************************************************/
	function getUrl() {
		$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
		$protocol = self::strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/") . $s;
		$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
		return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
	}
	
	function strleft($s1, $s2) {
		return substr($s1, 0, strpos($s1, $s2));
	}
	
	public function getSubString($string, $length=NULL)
{
    //Si no se especifica la longitud por defecto es 50
    if ($length == NULL)
        $length = 50;
    //Primero eliminamos las etiquetas html y luego cortamos el string
    $stringDisplay = substr(strip_tags($string), 0, $length);
    //Si el texto es mayor que la longitud se agrega puntos suspensivos
    if (strlen(strip_tags($string)) > $length)
        $stringDisplay .= ' ...';
    return $stringDisplay;
}
	public function GetNameMouth($mes){
		
		$num = number_format($mes, '', '', '');
		
		$ccc = array();
		
		if($_SESSION['idioma']=='es'){
			
			$ccc[0]="";
			$ccc[1]="Enero";
			$ccc[2]="Febrero";
			$ccc[3]="Marzo";
			$ccc[4]="Abril";
			$ccc[5]="Mayo";
			$ccc[6]="Junio";
			$ccc[7]="Julio";
			$ccc[8]="Agosto";
			$ccc[9]="Septiembre";
			$ccc[10]="Octubre";
			$ccc[11]="Noviembre";
			$ccc[12]="Diciembre";
			
		}else{
			
			$ccc[0]="";
			$ccc[1]="January";
			$ccc[2]="February";
			$ccc[3]="March";
			$ccc[4]="April";
			$ccc[5]="May";
			$ccc[6]="June";
			$ccc[7]="July";
			$ccc[8]="August";
			$ccc[9]="September";
			$ccc[10]="October";
			$ccc[11]="November";
			$ccc[12]="December";
			
		}
		

		return $ccc[$num];
		
	}
	

}
?>