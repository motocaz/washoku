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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',          'Ol6:n6f/azMf1O?G_{xC48CKMq5SG;>5pxX|^kKX9?2oSs@Xpx<:?QR}XKF$E.s)' );
define( 'SECURE_AUTH_KEY',   '93yH$OycWB~ED^$V#XB}[{x|O3bB@[s+.5Zd8;PT2FT<s7&,NZZ+p0VT`r~iU7|V' );
define( 'LOGGED_IN_KEY',     '*OT?&nEpe+JOv-]:[eet^`{3FL(qY}cMgW0x?+q}_q3:yT<m7vIi(~Z0g4pKf;E2' );
define( 'NONCE_KEY',         'N}-&glCPtk=uT)MTR%o9``uc5^E[w~2B43.G^HH;o |eK#&f?fw71w?5 bZmq@N-' );
define( 'AUTH_SALT',         '[b9`|h,8):<>b7ov7L&jTme6eg2-Zpj$|u?h3]r[SVr5o) a[du&F;#RG~$Y+`?`' );
define( 'SECURE_AUTH_SALT',  '~h3/XE%.wY~tCA| !6S&kC}U!Rk9SMZMJ>I5*C:^[Ug`CR]+G&7;xnqON;d$;iJ<' );
define( 'LOGGED_IN_SALT',    '9I/v:3#6uWeNeg:%=FS1u45yO[}|4ij`c8hYPxEcD(Z-WUaM?os|@&W^gMqi@>jg' );
define( 'NONCE_SALT',        ')bB!LI8.PGgeBQ26P9v]OR*Rr-R|NkJAAUPb1+I2 jF%Z$yO;(/dBlB|;$UTsq^`' );
define( 'WP_CACHE_KEY_SALT', '(I8`%](B^jT^73(5Es93J*aVP|RP:?9We0AdwCu=!$=dS{MupIE]=tKcc~E9?>[=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
