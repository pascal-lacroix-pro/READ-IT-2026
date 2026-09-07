<?php

namespace App\Controllers\PostsController;

use \PDO;

function indexAction(PDO $connexion)
{
    include_once '../app/Models/postsModel.php';
    $posts = \App\Models\postsModel\findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}
