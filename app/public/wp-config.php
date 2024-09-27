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
define( 'AUTH_KEY',          'DT<b$6twDCwL&ZEP0F_U=%kq[)l.VzW6[)BDvF)H!O,b=C)Xo84k.!h}A>%(+nA2' );
define( 'SECURE_AUTH_KEY',   '{];J{!r8r569scc/(<Z|Y(pg)HuP2r-ix:I*7@{|X69T-AseRqo .B&@{$-cv$Dj' );
define( 'LOGGED_IN_KEY',     'zWdp^ku=1Sn80yTD?<x3)J6NO?5Id5o2y5G@dp|+66<Fv;m>,waZVPvj-^]p*0Z5' );
define( 'NONCE_KEY',         'xWKpdPr2g~Mb*,z Qn4`aKG nj!AmU_cT+8$y<{TYHdABQrj`Q`u]2%)&~1AO?wr' );
define( 'AUTH_SALT',         'NV}{XeF?tm@NO(;if]Iy=QdelIQ@)g7411 oGM1>~,k)HdmdM0y1;W+nhL?Mu0$G' );
define( 'SECURE_AUTH_SALT',  'YmBz{>fowD].k9*%9igu#R1M]PJVz4T38GOuI&7U=|@b#v.<$r?t<=co3=F:KE~R' );
define( 'LOGGED_IN_SALT',    '~BVv-[l9;^QxAJ.xJE[9Yo[0#Pmyz5WQv=+)9T6+jgxCF{<jKoz/uBh(<{)K4`x9' );
define( 'NONCE_SALT',        '>]HszG# ~+sxAn_$U1!cSf6<*Gk)XLNmKceDx&{-K:1%:%)N|7SKWHBsNm?XaK|F' );
define( 'WP_CACHE_KEY_SALT', 'JMpHln,F9[!)*|FU-miA]xM!*p&Fi4fJo^P|,wYaB?A!,L*L6e>.{c,;KRs_wS0+' );


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
