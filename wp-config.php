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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'P~3/22h>(;c`d3V3;^:-Adqt2a^%8LUbOaTYm6inmu_9:hV-V.CM73{Gp+$C5V4c' );
define( 'SECURE_AUTH_KEY',  '#e69j~1L)3Eq`a`X[D{iGT9k(4+]F#7ASC6Ov2&.hEBc,BN&Lyed^=/$E}b@XrN.' );
define( 'LOGGED_IN_KEY',    'svBA;AU}o%5a.Y?w=U*lx]5eZH./nl+5c40mbjgFim>`*u9AM/FPDBsL%oFdri$e' );
define( 'NONCE_KEY',        '7r{CX_a:[K70_y>lwmI!ud0]hI@JJMXr6XCm$f|V^X0z0Fu%qDh23gA4k[[VVX^G' );
define( 'AUTH_SALT',        '.Zm8`7kHcycy,.~v&s#gM]D91A@1OB@G48B$:HtH!s{9EPEns==Z5KZkFRSJ`teU' );
define( 'SECURE_AUTH_SALT', 'vBUK>qxK!h:1=dIgY;$~icN1Y9RrH),#_ZnjOeqqfNWyMzvua?34b2tj=9qr%E5)' );
define( 'LOGGED_IN_SALT',   'x,hKzkYkMJzJfao2xa1vd}(mJblspV&3^.>#/9i^22A(l?e$qTU)#%SB#l0H|AYH' );
define( 'NONCE_SALT',       '`IFa*6(Wb/nhMC#,uS<YU:j!,)Ve:WI/BdgXY)k1^ Bx#=k(lTT)MBuCS[Dw yer' );

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
