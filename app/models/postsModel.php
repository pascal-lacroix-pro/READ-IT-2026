<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion, int $limit = 10)
{
    $sql = "SELECT *
        FROM posts
        ORDER BY created_at DESC
        LIMIT :limit;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':limit', $limit, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
