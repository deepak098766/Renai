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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'e~8^8sr^Uv4}]%`6s4hF[}C@Mdbn?::86vfp:.n~W:/-~80.frH`&UhajYRNQf+D' );
define( 'SECURE_AUTH_KEY',  'x~CV%R&i_)5PH-T6Ys;&mD.#],#_|Eu:-iYyGa`{8CU*Vl>0=1shPu 3zS}D |;z' );
define( 'LOGGED_IN_KEY',    'n{jyU&b9<Pa*vYJJ(e#[%mM5nw*n,mt?|(RxmJQvhQkuT9FmZ}X.o+~d98](}(Z{' );
define( 'NONCE_KEY',        'BQ< $WUUhfvSun3L}]/Q=U-R1%sugm5!th{Oi1v4.MStO>$6?KkpbGJui.R7s#eF' );
define( 'AUTH_SALT',        'US(5_B2I=m4@Yw6(=7h:|MWLJ%H%,GrOz:+oF#8wy?z<QJ&hIWsr?%D%yk@)/PN]' );
define( 'SECURE_AUTH_SALT', '_R~|z&Y/ZRms*cW*U+)K%{Luw:^{=:!h267vkg=9gcEg}rH}UuU0GHDd(.v!t=M`' );
define( 'LOGGED_IN_SALT',   'm$#OBoo.<={C0:;X+o/n]W5RGME2NNF0m,-b_(u.rxZtt4U^-7uke5YX[RlX{&,_' );
define( 'NONCE_SALT',       ' vjEv~jO-/$j!-Y$T|i9@z`{q8Y0dJ@Pv+K5w%4T2.2qV L~1}~I&=m{lf3s/eQB' );

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
