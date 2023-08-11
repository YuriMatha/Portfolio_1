<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'portifolio1' );

/** Database username */
define( 'DB_USER', 'portifolio1' );

/** Database password */
define( 'DB_PASSWORD', 'Cold@Zera_2020' );

/** Database hostname */
define( 'DB_HOST', 'portifolio1.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',          '#`^4At-SGLU-eB@,Wc>Zk<^p`_{{lbGC_pU<o+n0_r4W57 _li^s31I)}Wd.*6.o' );
define( 'SECURE_AUTH_KEY',   'H^Nv^t^cslDS},3]Kx6c5$+|s,8Ss5zS]$38?~N|71>luQP#Opu~s?)W{+ced&(#' );
define( 'LOGGED_IN_KEY',     'if$G5Y=7d4xMTc`$AAR0#$SHD<FAVR3*3WON0^HG$K)**mxtBmeJJRTPDuAr, 8G' );
define( 'NONCE_KEY',         '{obz+iS.xFTaY@3$D?O2Fu[MNk~=#mnWPO}!#xW6}lZ> o^$.gNMO{b$&{io_^J ' );
define( 'AUTH_SALT',         '?-$P00%u/=+q9kz/~NATM|uL/ZdYzXFSQaT]Fc,U}4~{RT1Y8Gb0_[sW7;eA}Wh9' );
define( 'SECURE_AUTH_SALT',  '!3.:gC*,y2(!OxEUXR_|o9<QlHfO^XB8<hE>#+`Gjo2<p!z@hZmp%euc?a0By7-8' );
define( 'LOGGED_IN_SALT',    '(96BPd[s[z0 |<[y3v[)lwo?)RKJqkDu%&=Lkb0} ^Q`XYZRdb%k]*RT{;W_2tF}' );
define( 'NONCE_SALT',        'W+NDsK$:iGs}w=,;>}T~#4l2cf|l.J!KlMIC(kf,Z]`Es:V=cuH)>*?|7]P^Zgz7' );
define( 'WP_CACHE_KEY_SALT', ';dx`T^t _8<0(~.zMP6 gb<siqT3C?m<8PGu[;_J:3EhYS0:sqX(t1&HLa5i}pEF' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
