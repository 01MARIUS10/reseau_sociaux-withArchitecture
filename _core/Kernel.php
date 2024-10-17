<?php

require_once '_config/config.php';
require_once '_config/db.php';
require_once '_core/Helper.php';
require_once '_core/Variables.php';


require_once '_core/Guard.php';


require_once '_core/Database.php';
require_once '_core/QueryBuilder.php';

require_once '_core/View.php';
require_once '_core/Controller.php';
require_once '_core/Model.php';
require_once '_core/Route.php';

requireAllIn('Model');
requireAllIn('Service');
requireAllIn('Controller');




requireAllIn('Routes');

// require_once 'WebRoute.php';
// require_once 'ApiRoute.php';


?>