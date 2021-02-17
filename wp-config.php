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
define( 'DB_NAME', 'bd-4w4' );

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
define( 'AUTH_KEY',         ';|GvFB:IvcbVx[u>w?uI{hm#bDS<jYvEt/RC+@*J{.J5yXbLYBaS,%jXkOdLX&@i' );
define( 'SECURE_AUTH_KEY',  'l=s{7[lO!hZT~wryFcPx_xLf1;]GjlqI h31U{lf 6IJFn|^F(ovYa<:x:l|UP@9' );
define( 'LOGGED_IN_KEY',    '7r^^GILI7}kyK+ww^fLIq/BcKf6K0ezmIIZE1%rLoCStKv<kqw_`Z4&E3gU2n8(S' );
define( 'NONCE_KEY',        '.ZqH1;;p-D?]+e7uM^,M=ULj LM)Y[${<f1eHEWS|_+fU2y_+RCU@qu~h0cSk$]=' );
define( 'AUTH_SALT',        'T-=UE82%;0~Am|6Vr5@]@>UQusq@=KKsnEm6<$AcisO%CAIu SB::$=0m@&|g*})' );
define( 'SECURE_AUTH_SALT', '5V`;}ue6A+Bah6eNzsdE/XEZy=Z8pK =l/`K5}F0W4oGi$8r[]pbB$%z[`@JzPE+' );
define( 'LOGGED_IN_SALT',   '~[aPvF3yQr0ITszN<!5^J|._}7^sz03D Y8yA6$&1g{q&#|&8{BU>JBpv_1WrU~,' );
define( 'NONCE_SALT',       'TP<bhpv+w{vkkd.4aY3Zp?D9@PmSxI7rpNwHVzx6zJp=kNR=m4y|]ON,rz8gL%t@' );
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
