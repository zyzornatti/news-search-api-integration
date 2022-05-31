<?php
$site_name = "News Search App";
// $site_email = "nameofschool@gmail.com";
$site_description = "New Search API Integration";
// $spinner = "/lg.rotating-balls-spinner.gif";
session_start();
$dummy = "dummy.png";

// define("APP_PATH",dirname(dirname(__FILE__)));
define("D_PATH", dirname(dirname(__FILE__)));
CONST APP_PATH = D_PATH."/v1";
#env
include D_PATH."/.env/config.php";

#db,classes and controllers
include APP_PATH."/model/model.php";
// include APP_PATH."/controller/class_controller.php"; //classes
include APP_PATH."/controller/controller.php";
// include APP_PATH."/auth/auth_controller/controller.php";
// include APP_PATH."/api/rapidapi.php";

##all routes
include APP_PATH."/routes/router.php";
// include APP_PATH."/auth/auth_routes/router.php";
// include APP_PATH."/routes/admin_router.php";
// include APP_PATH."/ajax/ajax_routes/router.php";


?>
