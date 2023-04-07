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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simbioti_wp985' );

/** Database username */
define( 'DB_USER', 'simbioti_wp985' );

/** Database password */
define( 'DB_PASSWORD', '@S)z2p@6y.Yw@j33' );

/** Database hostname */
define( 'DB_HOST', 'host31.latinoamericahosting.com' );

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
define( 'AUTH_KEY',         'oz345s16frbgkixori47vsqvsm6gzy9qgt89tst6zanm4wca3ireqw716aeqaoba' );
define( 'SECURE_AUTH_KEY',  '3zfb5ala0iaoihlykmbk3vhhp4vcgz4rpzqmzumkkvcwxjxfigi7mqx1ief0epk9' );
define( 'LOGGED_IN_KEY',    'ejedge5qdmp8jaofw5txfvqgo8lah3hwa1rdjuw7gmu7felcsijxsuzkiy0sesjg' );
define( 'NONCE_KEY',        'hv5ecjfjcokjv9f85ee4krb2fjyw2zs13fxgj3kvactb5iapwqhjxs9xmj4hmtol' );
define( 'AUTH_SALT',        'retuajmlskprts378ftwjczrpihh8hkr8f4hfmwzbtkfycn7n0sauhl1ypaj3w4h' );
define( 'SECURE_AUTH_SALT', 'egb0fq1vaqwcpjhys5qec3hkwpyd9sotstz4xux9rwdkonp3vrdsxwmgskugkmqt' );
define( 'LOGGED_IN_SALT',   'l0lmy709pnto4kogyc7wd197cjtgm1yncnbharnsvstz86oqvrnr2ldpnrmcutsz' );
define( 'NONCE_SALT',       'lrdwwhhj27madirs9cdfntocqithhrdzisfwr3uzb5vdh8swx23wwddpfzf4uvul' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3x_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
