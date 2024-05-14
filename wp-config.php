<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'ultron1' );

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
define( 'AUTH_KEY',         '4&;sou1ytZNC0+J]v`^fYhe}/}CCj HD/ol/i%_[F*F+?QEB&O*}Ryt4[T8^4<&q' );
define( 'SECURE_AUTH_KEY',  '-Et@lEelrYeI<b]%liYc.>*MNpvQ$}L8=tRs93u<Ic/Sz;tcXwb5h6ITj3%nF6tF' );
define( 'LOGGED_IN_KEY',    'GfJmxncPa2XXaEKbohrU4`B|PSek:LBdrcUa}:iO^?Xc/`w1Ep.}jk.5jGP1HkVc' );
define( 'NONCE_KEY',        '_2LlOct4b)|LlW?Zi}3(rWY-eZ<WV=hW}|#WX^R; ;J5A9^{Rk=2>ueS9q<sSy8+' );
define( 'AUTH_SALT',        'aZPGZle=;O5om_jVCRix))(YJ)[E1 TB[jpc%e6]c.hi_&[ >t&Mp]VgNE ! ~n.' );
define( 'SECURE_AUTH_SALT', '#$qeqjQvK0,u{X_V=E`65$,s[+:z{-uJ 7zs4|c[5j4$bja~dhZ7DQ,>jjoh])J}' );
define( 'LOGGED_IN_SALT',   '#uv1B`L6)NiO9bj[sDbOo}-K[Av)=*iw,GFR,>U=31/RHydaWZqj)]F`c_jA^nG<' );
define( 'NONCE_SALT',       '4HH!J-@NE#[m/2/k5Z0%aADX.X@}WW1[H]4GWQ(QmpW+*ms*l[G5/pej?@z|,|]D' );

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
