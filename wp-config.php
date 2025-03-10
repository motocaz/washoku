<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'tdbpso1gcqkxdld7wbfo29g8rhfqtjaclmksn3dsxmlynskbyefcjfpot6dif0mn' );
define( 'SECURE_AUTH_KEY',  'fo7qmf7ka5yvlgnwvigapf3qdlhpvrnslvu18tqtpioqvpwsdmlnoere3qjkadxt' );
define( 'LOGGED_IN_KEY',    'cdefd2n2nfwsunhshbguazqtxpkoilnwujur0msnlppn5gwypkumn6xe4ylpilku' );
define( 'NONCE_KEY',        'mguyd5f54ih2ng8p9ajwmtlcnayq0o81f1fufphrqgirglnppaokowen5xwyatb9' );
define( 'AUTH_SALT',        'fzm20yx467ojb3tc4u77etbt1ltqzepdyidfvzo673f0scwpotzq7koxj9bogfb0' );
define( 'SECURE_AUTH_SALT', '0ezumiaenozc8t0q8r4askdzkriuc02mgvicn9un64adhqo99eo8pob0mmtaknuz' );
define( 'LOGGED_IN_SALT',   'iwsbzbvoy7wh5age6ylvimlkrwr3wgvfyrodosxe0dyiomcfbt6rgwcpxbgfsnxm' );
define( 'NONCE_SALT',       '96hzwkfv4dww8ggfxgkcnsoshhsqsllenicoacwal3uphisqyl7kg8qcosky0bdv' );

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



define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
