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
define( 'DB_NAME', 'project-roes' );

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
define( 'AUTH_KEY',         '{ecL(&O?T jA`G.cOf }blN_YD%X($uD`Kip*pdn +XNp53@4i($>eMgI*iJFQTl' );
define( 'SECURE_AUTH_KEY',  '^ISy _Vv d57<=[=fZP#xkCdRV?EMd=L4A`z8K~Re(YxyN+oz^O|]zofXG#0fSG%' );
define( 'LOGGED_IN_KEY',    'SRM>OQe981t6D4~_V^0d-M|[Wa40Z~N>U^6LWeaL8$wKl:5Z7Oq-:Hf?8FFp7lX}' );
define( 'NONCE_KEY',        'k555)rT:jG%*IqYak^`l($M)9Yp]hEwOvwsccls~NJyjccxJY{bjg(FJB7Ko(SH{' );
define( 'AUTH_SALT',        'WMqs-%4N-l6Fcrq_2J;k-2e!?E<k@NuGC45Fu1%|nU4P:T2<$#lhwy!HdV>Re`ln' );
define( 'SECURE_AUTH_SALT', '9J8~7x gZNBp)upu4i|ePF=YR/-k{>HrpN=9{vLG[.Ek75~_%figYO:3d0&+u~T#' );
define( 'LOGGED_IN_SALT',   'p*g^p4{a]MIf4J!Eb;C-;)`{h;@hX wHZSYk-MiUqjirh~p,gF+J~8M*u:Y(zY>I' );
define( 'NONCE_SALT',       'GC|KRw8{Ntd+pLH}Tg`$;6;iNpu I8&=C>J*ZLcZlseK#plZDsTt=sb}Y3.fu7G[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'users';

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
