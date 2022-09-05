<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atratis_teste' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         's~/(hZf:*f@vK,HI*}Yob_eupcj3lA0dDV|BYMPDf3/nO7s0moVe!yQlDHfpJy0U' );
define( 'SECURE_AUTH_KEY',  '9Z-y&,gXUtTy@4o7G=<0Eo1fYaf]3.36_meAiYElpsoJCF3n]dEodwiP.QanTjB-' );
define( 'LOGGED_IN_KEY',    '`~Bdox~VH<]i2N()`qzR lbAes[aXhbRUU?xd&M8}kw()I;0_LpW7ZA`4i#^;?gq' );
define( 'NONCE_KEY',        'U5bjt!F|9PW~H;a3SHOgl|S8y<jO::U8J?72pGpC<aU! +7 !5WOi:A5XoQk__*$' );
define( 'AUTH_SALT',        'f:<oK#gnI[8)FVju4FA^z-jDWX:4%m?-?>.S=7Uz`/W,j)D;xf1TkB<Bp_)z*bO$' );
  define( 'SECURE_AUTH_SALT' , 'D]6-Imq<%{{j<DsU]N)4E#`|z+(n?8y+EYTj^$emvKPUS45$8ukKnP^H12h?42b.' );
define( 'LOGGED_IN_SALT',   'J<|@e/4ZA[UL*p>fMLBHi2)A,_EQ8#Fp^>8rq|;8>j9$OU]rr5[<[h,:Fu#Z[d:d' );
define( 'NONCE_SALT',       'l(sq6r*[SmNZZ hXVayrp^gBk7Z~OC#@g_@|2`6UbchF0(j1szgR]*H3qiiNUKv ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';