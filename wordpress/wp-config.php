<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L!)o{p)(4sU/jNq1@.4CF9VrqXR+^zdKyI&h]UJG-_#[]!^2rj_!bFOrI>CI3{!I' );
define( 'SECURE_AUTH_KEY',  'VqC17$GS0YrWgxg-?{y`X-KyWKm|WOq5?wUo>@dxD_G: @m|B-4HnUwTTiOSnet ' );
define( 'LOGGED_IN_KEY',    'W+pj-A-Qbvw5D2/{BD2PsvivS,)jEnDR6!73+s5Wp ?|+0Mr3.bPCY:$ffMxZD]l' );
define( 'NONCE_KEY',        '}$cGMkpdK[h|e+w8F$TR!!,!KjniCg&iir:#{;@WaHhn&hdCG9>qKBs14%Or<pU$' );
define( 'AUTH_SALT',        'YVPFwWCj86LKJ.Y*}X#Ir86B@125kQ>Q9N6BG}R<FefQP.!+Hf[$}F_sym/_0Ws7' );
define( 'SECURE_AUTH_SALT', 'HS7CFc3BK.Br }lq)3uCJ1a}pXBG)X#ymncGSf=q)x)Wy:%?OwST6>qS3^>Zoeu&' );
define( 'LOGGED_IN_SALT',   '=*<Z!$]ha*!`I+^^Y9G@60}_I$G3q^9vd6i@PH5.i~b!nOxB 80`WrbW+-NN?e07' );
define( 'NONCE_SALT',       'e?(8ABo;Co}/<w|.?}*+y?zo1h#g+Cb|}N{U<u]Ab,|H#C_Kjc0m+2(Ui]$3sGqA' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
