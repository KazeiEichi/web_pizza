<?php
/**
 * Fichier de configuration general de l'application
 * 
 * 1. Définition des constantes.
 * 2. Définition des variables d'environnement d'exécution.
 * 3.
*/

/**
 * 1. Définition des constantes.
*/

// Définir le chemin du répertoire "utils"
define("UTILS_PATH", "../private/app/utils/");
// WEBSITE_TITLE : Définition du titre du site.
define("WEBSITE_TITLE", "WebPizza !");


/**
 * 2. Définition des variables d'environnement d'exécution.
*/

// Environnement de développement ou production ?
// les valeurs peuvent être : "prod" ou "dev".
$env = "prod";

// Liste des domaines que l'on considère comme étant des environnements de développement.
$dev_domains = [
    "127.0.0.1",
    "localhost",
    "webpizza.local"
];
/**
 * 3. Définition des variables de base de données
 */

// Liste des configurations de connections aux bases de données par défaut.
$db_config = [];

// Liste des connections aux bases de données
// Cette liste sera nourris par le fichier db_connect.php
$db = [];

// Inclusion de la config de la base de données.
require_once "database.php";

/**
 * 4. Définition des variables de routage.
 */

// Définition de l'uri par défaut
$uri = "/";

// Définition de la table de routage par défaut
$routes = [];

// Contient les informations de la route courante
$route = [];

// Inclusion de la config de routage
require_once "routes.php";

/**
 * Définition expression régulière
 */

$re = [
    "name" => "/^[a-z-\sï]+$/i",
    "image" => "/^[a-z0-9-_\S]+\.(gif|jpg|jpeg|tiff|png)$/i",
    "email" => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/'
];


?>