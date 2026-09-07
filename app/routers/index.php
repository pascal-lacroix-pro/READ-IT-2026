<?php



// ROUTE PAR DÉFAUT: Les 10 derniers posts
// PATTERN: /
// URL: ?
// CTRL: postsController
// ACTION: index

include_once '../app/controllers/postsController.php';
\App\Controllers\PostsController\indexAction($connexion);
