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
define( 'DB_NAME', 'wp-blog-2019' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '5f36be95bdb674b1936a09ca43174019ec02089c1e80b32d' );

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
define( 'AUTH_KEY',         '3Il:fG<5rHgEt,#KnoG.4,)pFHF8HyxQ2e ihed>QLxW6]q&5zrYcuAnorw6Qft`' );
define( 'SECURE_AUTH_KEY',  'y~gN4KbGA)=s2xtkAtn]IO&:Jz+rt{EP-c/*Ovi010S+;&^z$<Li]]3-2hk9[ES<' );
define( 'LOGGED_IN_KEY',    'c<~W/SmUI5QYPIYM2xuzdg!Yq@0(&>FcemzANDqH!#|yY@G Qroz)LWz WPFwYF:' );
define( 'NONCE_KEY',        'adc _{CFHc{=>*gtEyrlJXX{.ZQTBy||4FbJ%cdV]_q/8S!^b3q};qE2D RfF%7f' );
define( 'AUTH_SALT',        'c}Zu?:-i1+g4dvyG,6m<;vSR6`kzS.MnSTiRCow5@ql1dt:1>V(U]#)zx*ew-g`B' );
define( 'SECURE_AUTH_SALT', '(/@&j{hO8_*#le>vLu.KT6`6I4q=U3_ph.l[A!Vmzh?+ 8qG@P.tN1OoA()ll#Q,' );
define( 'LOGGED_IN_SALT',   '9NFJ,A~?nX *d?|1zI~<chTP<SI)d~GSRF->tUV2H./~QN.)9WxlQil 4C_,]Y@2' );
define( 'NONCE_SALT',       'd_XR7x{D=uX&:RwnJ*__yJlV1[LgxLcfLdWd+G:WWLvK@<gp?b;tY+JhV[z^D?<]' );

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
