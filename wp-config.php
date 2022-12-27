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
define( 'DB_NAME', 'amir' );

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

define( 'FS_METHOD', 'direct' );

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
define( 'AUTH_KEY',         'r&VECJ$b~tpu:m5w.P!n&jxQV|uT0lx{627mTGwaqYV#XUI*d:T~OobI!%$/vsZ~' );
define( 'SECURE_AUTH_KEY',  '_z|D8[F#hX 6$ $Z(u/2t*7M%{j}z62H8Y0oS_9x1*tC7YNO;bmc(x}!G^0!ru;b' );
define( 'LOGGED_IN_KEY',    'U;LZk6P`X^x6V9tp-Dhy !A[7P?*gYo9dA7gB<[{F3e3_VH2j]<=aS|.>6tD.ZB`' );
define( 'NONCE_KEY',        '1PE;Dw@^1e!x52Oiv5Fbe[x>vkR^0o1Qz3XF8AGW-ZCIiDLe~Y{p].K+Nk,FwOQ;' );
define( 'AUTH_SALT',        'Np@>fhAtpcZG7uN}+qb r*+ohX4(0FbU;@]:0CBp%o;8boP={UO0;f~_t?0YnOo0' );
define( 'SECURE_AUTH_SALT', 'u${&|k+Iy7N/]4HWMBwDI1WZ>!-IxOO(QwTTSS0U:|~}*xeH}>x<Dk}x)]_PS]VU' );
define( 'LOGGED_IN_SALT',   'de(=857{+-8g&XxYPKP%}i=bVBt,1otwGIkd7?JhXR.IbcDF$wF}}eJqC1KR(2hz' );
define( 'NONCE_SALT',       'osbY(}LA:*Ts9U8&jpw+>SS4(ZMt ]Kg,8i[-xKbK$&2<C&5rH=]T40sS1]*yS]G' );

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
