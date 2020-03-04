<?php

// URL base do site.
defined('BASE_URL') OR define('BASE_URL', 'http://localhost/git/desigual-email/');

// URL base do storange
defined('BASE_STORANGE') OR define('BASE_STORANGE', 'http://localhost/git/desigual-email/storage/');

// Session | Caso deseje que a session seja iniciada em todas as páginas
// Apenas mude a constante para true.
defined("OPEN_SESSION") OR define('OPEN_SESSION', false);


$pluginsAutoLoad = [
    "sweetalert" => [
        "js" => ["sweetalert2.all"],
        "css" => null,
    ],
    "mascara" => [
        "js" => ["mascara"],
        "css" => null,
    ],
    "dropify" => [
        "js" => ["js/dropify.min"],
        "css" => ["css/dropify.min"],
    ],
    "offline" => [
        "js" => ["offline.min"],
        "css" => ["offline-pt-br","offline"],
    ],
];

// Salva como constant
defined("PLGUINS_AUTOLOAD") OR define("PLGUINS_AUTOLOAD", serialize($pluginsAutoLoad));