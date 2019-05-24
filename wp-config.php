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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '9)Oq+waRfWbVHdPY|/AK}_G:>cNe2au5MB^BXa9Q)Q$%t@rx=}:!2?KihUb^LlW5' );
define( 'SECURE_AUTH_KEY',  ' %xOAVS8>p(Y)%L;-_<?%OI<<KB.]c__w]Pr?E7Je1iZ+x``Lj0DAzY-7f*]JHXX' );
define( 'LOGGED_IN_KEY',    'atS0~lHj{t$]%V*|&%)#M}x[95B@UFbH?r8OQlEk8Xgv>640-H<@aY_M=_cW=VUQ' );
define( 'NONCE_KEY',        ')!F#cu@V{MOHtu.ZrVdL1EaP::}zMoSThq?Yg|^YVkZ) ON8sO[2e-O0I;Jb6>2j' );
define( 'AUTH_SALT',        '0QqBWHB#+ ~ ]:ap>38HEjHZ87 KJF/w`QEWVuw@$?%jeM2Y1]=BVPD+`OSZ16V{' );
define( 'SECURE_AUTH_SALT', 'M1/2WvdX,Uf,Xka+|q9Nhyuxu1ugArRi!RxQU--WJI-}MU+l->vVuZhI*gJY2u$7' );
define( 'LOGGED_IN_SALT',   'Sk)K,*UE+%Gek40K;.k/c($HrjeIri^!tJ`YFskO`m|nSG8,|sv5PALH8o*YhWMo' );
define( 'NONCE_SALT',       'Jb4y9gblnfykJSbGA>P<Px,%@8;_kS2F0i) F2_peZ:wjA0RxSNRvq.Ka)MzL].(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_emobile';

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
