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
define( 'DB_NAME', 'mandarin' );

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
define( 'AUTH_KEY',         '3!gtVbYz0]d]rK`?>egcaFiKqG$*8]^,z8(GA_<t-~akmubr.9+-{g}i:!N$dE/;' );
define( 'SECURE_AUTH_KEY',  '$z7DZMR7Wt>Kds(Xv$D1$j{WzQP?ZiD(tXUn48xIU4O^%yt_gZe)DxZE4juIs_s0' );
define( 'LOGGED_IN_KEY',    'q?vO}6.Q7tNQpx^j V6@A(?;*x]<&)v*OOQTV%LLF@w*59,HP#+RU6=M1a*%:N:)' );
define( 'NONCE_KEY',        'oq}O2lgrO`/m#WLm+t#`hqHw09nV;wuR2[IrG<vMrzA>%cqUC:-1?4r$W)}K+:<{' );
define( 'AUTH_SALT',        '}kHz?E/A/W_6PmWbiEI?[]bpoZZ[E#b6VdRy4/CHk`r!F-Vy3[Jwj5z[ZHWn!umo' );
define( 'SECURE_AUTH_SALT', '72F|HihB~M;^[(y?Q,O4o8>m=`}ih$GN XdjG94nGuGsVF%pN@sdrUd4jAi_9A-:' );
define( 'LOGGED_IN_SALT',   ' `wiEc)s;ms5{@Q)W5_m@lPX#t@s99FnnP]cY CL2b/!}_Ia O|0%~+P%I_d0 &8' );
define( 'NONCE_SALT',       'UJX4,WTJx-4XqvVC>OI~~C29w]V-9?vU;p&)ZCJ(H:W)5EOUt?P_uy&qB=zfVn0a' );

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
