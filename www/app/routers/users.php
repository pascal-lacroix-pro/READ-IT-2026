<?php

use \App\Controllers\UsersController;

include_once '../app/controllers/usersController.php';

switch ($_GET['users']):
    default:
        UsersController\loginFormAction($connexion);
        break;
endswitch;
