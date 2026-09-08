<?php

namespace Core\Helpers;

function dateFormator(string $date, string $format = "d/m/Y"): string
{
    return date($format, strtotime($date));
}

function slugify(string $text): string
{
    // 1. Remplacer les caractères accentués par leur équivalent non accentué
    $text = iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $text);

    // 2. Mettre en minuscules
    $text = strtolower($text);

    // 3. Remplacer tout ce qui n'est pas une lettre, un chiffre ou un tiret par un tiret
    $text = preg_replace('/[^a-z0-9]+/', '-', $text);

    // 4. Supprimer les tirets en début et fin de chaîne
    $text = trim($text, '-');

    return $text;
}
