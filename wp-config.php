<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'hiha' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );
define('WP_MEMORY_LIMIT', '96M');

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
define( 'AUTH_KEY',         'QXs$`VlKXfg=B,+f7RW+4[V=fFCMx:O(vyDn!/[-9Dtt:QIDT-9LrlM4Z6*x$.,f' );
define( 'SECURE_AUTH_KEY',  ';&cd8QX0?j_=!Xe6s>!_|)wTYq9|U120s46U&7(}i(fvaP&=S0q@lG*4m:h,W43J' );
define( 'LOGGED_IN_KEY',    'vm6k[EuAMCE|e$rZ@%|wN#d|c,J6~ WdVg~)G5QpJ~Vs{nCU[ { lU&8mFz]Pfo>' );
define( 'NONCE_KEY',        'dlC*HLtV+2!.f0ePm%qR0^]HK4e*%^]aV*s,H*5N=sZ5a<DN%3XYJ_OB-DTJ_JxD' );
define( 'AUTH_SALT',        '9 a{.E9Z(wd;ZCcT*>;hkR`oOzDD,@@1},L]dk/r=mueDo|xF?kai!&vD/p^oz3-' );
define( 'SECURE_AUTH_SALT', '-B;hZ$Sx(g,NuDUgt!$@{U;Mt&H(n2-asA#1y[]wTK:XP6lpj)z=o.]xOBN,9P.;' );
define( 'LOGGED_IN_SALT',   's;6,#HYzS2LJiZ&UB/{[Di$4aG]^Bn+s6LC,8cKI7m`Cnx!)Jl!1(3I`!C:rr+0u' );
define( 'NONCE_SALT',       'Ai)|7@yxrD~vyN~{1bfay`K6+xa01>20~{ /b_A]h&2&=Fh!Icow+I,Ik#t9{Ql1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';
/** FTP */
define('FS_METHOD', 'direct');
define('WP_CACHE', true);
define( 'UPLOADS', 'wp-content/uploads' );
require_once(ABSPATH . 'wp-settings.php');


/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );

