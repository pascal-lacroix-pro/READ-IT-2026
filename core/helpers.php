<?php

namespace Core\Helpers;

function dateFormator(string $date, string $format = "d/m/Y")
{
    return date($format, strtotime($date));
}
