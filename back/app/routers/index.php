<?php

// ROUTE POSTS.SHOW
// PATTERN: /posts/id/slug
// URL: ?posts=show&id=x
// ROUTER posts
if (isset($_GET['posts'])):
    include_once '../app/routers/posts.php';

// ROUTE PAR DÉFAUT: Les 10 derniers posts
// PATTERN: /
// URL: ?
// CTRL: postsController
// ACTION: index
else:
    include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;
