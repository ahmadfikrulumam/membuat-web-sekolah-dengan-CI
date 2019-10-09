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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TDYW0_R6|IQ^,IbR+Jbmo?jo&+3 Al(T 5~K:$i,5UgdH{%`#,4:mW3rP>I[}Q| ' );
define( 'SECURE_AUTH_KEY',  '5,Ob=EcG:M|,=TR/)k!m)I<I#sBvFng6K-~@3;z8af?D`a{Y Fg}M2+]vbNu<xy!' );
define( 'LOGGED_IN_KEY',    'x1V0ZHjR$X5}i*Z[:#^J;oX576V#yyU~&Sf~@HxIMklUaiL}SK={4wjKo<KDZeM;' );
define( 'NONCE_KEY',        '-u(sd1mq(uX_>2?gh%H)5w]>f2ASm-8gq|:{VUFg+UJTUqTuV!AB+W^,Fe8kuu4u' );
define( 'AUTH_SALT',        '#BF,XumOZ_(^S^(k*>pt>nfKv!STWRTBAOB(.NrhJ}dPT?l/a3iw6 ;isJEQt4k0' );
define( 'SECURE_AUTH_SALT', '5LO4$y#5%@:rMil%]Kj- `GD{r_,FUe2-|<&;=_zM(w-}K9t!m&9bb,Vu7u)F/Tu' );
define( 'LOGGED_IN_SALT',   'kZ1@<N#:Nu:cq>6)&Y: vdt0GNs2mmf5lcuux$i2v8,!>0[-gnt~rv*/HN}I3j%_' );
define( 'NONCE_SALT',       'RknF;zu*!ZP9{~cOi]FlrT236j%1.>~]~.;9+8ko2>OPfS3QugtYQJ<t];oWIA}A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
