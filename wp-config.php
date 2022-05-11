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
define( 'DB_NAME', 'ecommerce-wp' );

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
define( 'AUTH_KEY',         '.43RsKStPkb?L0$IU&dj_1&CL>fK5Ca+&uakY(J*M,%Jc 2e45n1?T)_Hf% d0MY' );
define( 'SECURE_AUTH_KEY',  'N2#(1[2aa(_D6ME#TSVl^x{rfbjZ?m84rz3D?xY-uVqj.uKk]96I3:m-2SF?eb ~' );
define( 'LOGGED_IN_KEY',    'O0fXWeKVq<CXoroF7-]kDB%a`U#,?cIg^{R!;|0jG7RUwq*V6CyOL/=^#:J+!A[F' );
define( 'NONCE_KEY',        '_o23iJ8D_XFbee+r9[ePi~QW;XSiJOC57,o:Q>_sN!e}<(yg*7A|O-,Tc)AaHqQb' );
define( 'AUTH_SALT',        'WT)y76Z9hU PkmFRRM$O#aOVqKb=8&.zMhV>pe,d#Z[Is+5JUTYsxHl:YbY&Z@~p' );
define( 'SECURE_AUTH_SALT', '7L NF3`*>KLkNI)!q![<QS=#)?,Jb8}s+z1^NSX8-{RofcVVP02Pi4>7)-m_LuJ}' );
define( 'LOGGED_IN_SALT',   'fv!`ApR}97S+YYi1RQJ74:,lg<}i=c+0m|&CtW@DDSN3,-#08kh?PF<-PMgg+?$%' );
define( 'NONCE_SALT',       '8i $`zqqWuS5kDJSxcpS&n5HaNeT=;?5iC@O@7<;+f/Ly.+3+An( ]U@&<3NQ)<*' );

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
