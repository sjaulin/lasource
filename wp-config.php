<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'lasourcesuwp');


/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'lasourcesuwp');


/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Lasource33185bdd');


/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'lasourcesuwp.mysql.db');


/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');


/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'X=VOxE=z8S.aG}I2Y1=)e>^qj9N]dW.0mPgPhB7bvE?)M[r%q^}*cVUqy(lxknBa');

define('SECURE_AUTH_KEY',  '0p4yk7si7`by~#9Y?]^i,p|{AppOtERQ`h8f>{l9(*L&8[GC:R*Iw3sm0pe>Eh}<');

define('LOGGED_IN_KEY',    'mgHas#qRgc~=RAIN3!CRax*7gt38Lv_Nz*?z?i8&bN:EQ)ejM9BPF#{#+Jgo@=u0');

define('NONCE_KEY',        'W=(9ba0F((L6AS6R8:>Y<K#_i%bwEbA*hH8Po|-Ejg4o%y){-.:nx!T$6k2?r_][');

define('AUTH_SALT',        'O2kptb{$;fzik+wlA[I()mR|Jq%l)Nv+|N[=,{y&TWXf&f}_mgsX*e{#y4L:V+`=');

define('SECURE_AUTH_SALT', ',9`WF9;Zds>u/O4}5Z8UFt@RVS,xgG.z]yhHyI/yox&6]/D B[}P)&Eg!0N~Tw=C');

define('LOGGED_IN_SALT',   '{1}CUfM!I>dg-EbaF 1Ioiw#Z(Bj8[B|*g)B{`^!+I|voml%v#YhF@KREqNU7!r%');

define('NONCE_SALT',       'gq~W-zKwpBCI5H,vtNr9nw9KCnw  1_PAuZW]G&a|Zw);T6%0h3YJ(a?K 2vTf&(');

/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');