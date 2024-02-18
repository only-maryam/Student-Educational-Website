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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'first-tutorial' );

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
define( 'AUTH_KEY',         'n9M9r1r }.?M,fBCUp(nss7%?N)+<e}z`|-~*yV4+J+vTi50gHS!.QPuwcPiee#L' );
define( 'SECURE_AUTH_KEY',  '1$7U8x_ ~Ebd8SI:m?e[+A?XajV:(Rc<SK^p=m&S,58tJk%6UPMw|2f~ZH@CYS)k' );
define( 'LOGGED_IN_KEY',    '}88?.-F3~H2bEuwwNptVXKqjJ:~| OQ XlW<?k$U@q{0ja>EPZVKLp:@<rb)WX|g' );
define( 'NONCE_KEY',        '*FAwXLo?wBcVaRo3BS=!z1/.Ml%lYJ%6~hAVs=k6(s`Yqm S]18$,B #S{TW1qLO' );
define( 'AUTH_SALT',        'VC5CtY{fPF]l`A^fI^ZgjNwGEo{F4Px$ 88v{ u-P6Jr1,n`YC[#^nb4f}f_Ct!?' );
define( 'SECURE_AUTH_SALT', 'b$27^P9G7{ :>~g0@8O]i3~Hg}2J1]5bQC[945R!bkFCHa=LR|x.0pez%sE7;!i)' );
define( 'LOGGED_IN_SALT',   'F9Y`J~oTepV/#VXMf*bCrD^G;Ov[g=w&l&cWO<3XF3HVG4oxbd4%JC3/eSf&a90?' );
define( 'NONCE_SALT',       '/7Wh?DBcr^@Ez{6n8KK9&`^Ruze3$jCR|oS]^<`C.1nuBA>V,L>A0K#+5~k<-}(~' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
