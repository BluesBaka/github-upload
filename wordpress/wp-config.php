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
define( 'DB_NAME', 'daorn' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=x9j7p$F{,k+N/_i)^10Vb`rp:)v8n?gDpjyv&nf4-3l*W}eiqT A>u1)x1!ZGm ' );
define( 'SECURE_AUTH_KEY',  '$A?r*zU[a~O+KDw.)Si/z#p2U,oH!wk>jn rWk:N=m5(}r-]JV@ K]xSXK|y@rxo' );
define( 'LOGGED_IN_KEY',    '(OG#J6K<FARj%UNTTg!@78z5D#wWr9p0%hFdXPoL6,(,D[;6/9*sZq+W*WuY/Kd7' );
define( 'NONCE_KEY',        'DPaCK;NU}vB1(^a]pUPCAZe%`u,?&eR=u_>*i&.A%ykzX:0u?}{X1Q2V>uCk/;sW' );
define( 'AUTH_SALT',        'Y(txXSanbVfL~`-5OYUn8xiTz_qj)mA7vjus3DT0<6`lefk4j`3SO|~rzOD$i*IU' );
define( 'SECURE_AUTH_SALT', '7(]M%tBMv;n+m2|~&m@4?kCQ0Mp^&,/1ymPPd4.5~t~E`JbR%Q5_4546lKnrMZxl' );
define( 'LOGGED_IN_SALT',   'iexl-^LwrN (hzl<p4!uW-9g20A}_V0d=bLPR7>NAIUGU_TwV6rE8}=;P4ba-VB&' );
define( 'NONCE_SALT',       'k;2%<ve}N5_Ajd~/K9#lG3M}}M>F?oLopP5wcH;~Jz `P_nu]v3)8%WZL+c<Dv<*' );

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
