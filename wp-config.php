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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_git_demo' );

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
define( 'AUTH_KEY',         '!3M`3dyTm&V)*!obR-8SO#BH[m_*f!|B8Ydh`Jo%1;CXN42F^:N_7TFqKT$>StWC' );
define( 'SECURE_AUTH_KEY',  'f#HB,Rv*1%U3-W~k:bq)j:eKw<yK@W=/{y7gebq#Con+u}pMYmdC~@C:NRiTCa( ' );
define( 'LOGGED_IN_KEY',    '&bj;W,<9UN7Oym}vgg,tJ!_>TVsp{Ef$hx&`8DI}:Dtaq7{uq0U!OrS]4XKRcj:8' );
define( 'NONCE_KEY',        'kL}!wkggj.DIc9^*^%^OPX%$f_-^.>fp~B7s7}!Nj*%B&Gn*#uyIU`Z9YL&t pB6' );
define( 'AUTH_SALT',        'w-Kz_5wmV@4xSpiTzolHsLg4e*zVhByhdM64BitVipoZHmc4yfeM^&Ik6Vp&$5Z7' );
define( 'SECURE_AUTH_SALT', '}>}>kgEl6Xk@Iq(VhG[j*m_UEHpC0v9F</nnNMl*yF!@dR>3rs:%7iCq`5r.[s.M' );
define( 'LOGGED_IN_SALT',   '|=oDzwAS.yL@pMS>)P1(f;k|h7M>=3l`3,C>tZ8V0O/68SvA$#FK,`C=xMN4RX3K' );
define( 'NONCE_SALT',       ' .RI?OPS$8?kx.Cu2z|Lc<[C3l`H12JFD0SJ3GhDmUe+k&{,QCR5J(x9.ANv#Zg=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
