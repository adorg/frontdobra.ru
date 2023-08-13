<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'frontdobra');

/** MySQL database username */
define('DB_USER', 'frontdobra');

/** MySQL database password */
define('DB_PASSWORD', 'Dobronravie123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'v9 _.h&U$4Rq6fHoW.1b(Z#w--gG$rY}1|6w--d^1g6Uf+?VZU}PSC~M>%6+2G-e');
define('SECURE_AUTH_KEY',  'Y;f06NV*d&MGbbE[l.MNI[][-fQQ1y)u9`sb>JbI5JyVHwWSWzS3Vz}wTZj|E[[H');
define('LOGGED_IN_KEY',    'VHY_g<Oy|m8]~k9t1FBQAJKs.0O&.59#Xz%pR %_%(9r>uscp#zb=MX/5#0x2<>+');
define('NONCE_KEY',        'iU%EeGc!Mw2:9`Xfo>K$>k&`=!`9T(b)G)86~[7NlrzoakOax;44S|g2C4-lVw6H');
define('AUTH_SALT',        'y>#he>0;79Bv7![SyE;tF@RS?w3G-`<#u2W+u}+w-YGJsG9dm[Q&8T4$m1CO_;d5');
define('SECURE_AUTH_SALT', 'I{1<MGE0f~7 QRiV@~|tcZo0kM2f<1r`8lEF0CFDgHR6tZ;}f*4LPK?s :e4VhY7');
define('LOGGED_IN_SALT',   ',/EWgQlqD_OQOP6*(Lsp|pZLee>]IBNxe<~q&Fyif@{rwdz-k}r)>P0p3)ry?tWU');
define('NONCE_SALT',       'w2f]?hcrbN~wJ=buF52;gbNC.S0pi%2a.%%${m$M~XrZw-HNE+k.D+yr!J[]B]J|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
