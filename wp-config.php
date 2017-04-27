<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */



// Local
define('DB_NAME', 'russell_journal');
define('DB_USER', 'russell_wrdp3');
define('DB_PASSWORD', 'dMqkiVLH7CrjbC9W');
define('DB_HOST', 'localhost');

// prod
// define('DB_NAME', 'russell_wrdp3');
// define('DB_USER', 'russell_wrdp3');
// define('DB_PASSWORD', 'dMqkiVLH7CrjbC9W');
// define('DB_HOST', 'localhost');









/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L_-:k7RTG6dA-c(FB?tBgJ8<o!XXN!hR4F8:/Zc/ZhY(A\`rkAWh2!eWU6S?!lZ:U!ny6AjEa:sZr');
define('SECURE_AUTH_KEY',  'e0~|*7or*dM-EdBY3FChC*_9J:6!D>NhC@HmmH66BMjN)dk\`B(?2gG8IwcZRMWCyEiEiXKqjE?q');
define('LOGGED_IN_KEY',    '@uY<<!*W!C^0lD!vFo/zX>paxgPC<\`4$Tg:0Is9a9:LxFWnfde#PfXIaMvll0sw/tTZZ');
define('NONCE_KEY',        'Fu>6|A|:Z__g;7|t/PL\`j#>Kw~5KWL_C?:bPj2vk6iux<CPx3yF:)0c)w8ovTTpgPN');
define('AUTH_SALT',        'mi$ULa1Dn)f7j2a=FIVDk=m~4zEz6vkX$T=s7Rn*CI(r61(K~PjcKTN@!6(z8|<lte3CMgyS8\`Y#TvjG<3Wf5hP6rt');
define('SECURE_AUTH_SALT', 'n(~rEZoKx9T?8g:7I8iWagjgrgoe3R;:HP_C-1V8Rb!Qc:S2lT=/tW>~(fxH*B7hcwjB)1n@rrN');
define('LOGGED_IN_SALT',   'C0pTTEtV@;bV>e9:CW5iVZMPwf=KG@!u;k7IFU|7)$!1gvTa4l*HV7m7ugI:udBQxCNGI8S');
define('NONCE_SALT',       '9t7VpXoH<^7M_K9t_biHd;@_cX?-OAiesvaXU)JWIb\`dtKGv)m!cJ-t3nANbgB8UdUp/A?cn*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
