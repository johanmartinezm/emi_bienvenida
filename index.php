<?php
require_once './class/link.php';
require_once './libs/Mobile_Detect.php';

$link = new Link();

$site_url = $link->Build('');
$detect = new Mobile_Detect(); //redireccionar a versión móvil si nos visitan desde un móvil o tablet 


include './templates/header.php';

    include 'seccion/home.php';
 
include './templates/footer.php';

?>