<?php

namespace App\Controllers\UsersController;

use \PDO;
// use \App\Models\UsersModel;
// include_once '../app/models/usersModel.php';

function loginFormAction(PDO $connexion)
{
    global $content, $title;
    $title = "Login Form";
    ob_start();
    include '../app/views/users/loginForm.php';
    $content = ob_get_clean();
}
