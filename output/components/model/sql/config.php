<?php
// header('Content-type: text/html; charset=utf-8');

define('DB_NAME', 'echance_cash');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

define('HOSTING', 'mysql:host='. DB_HOST .';dbname=' .DB_NAME);
/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
