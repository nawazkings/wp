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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         'Ta=nO>^<NXx-hZcjZGxMv:(khVNBiy/jgTdv|Nbm )J:Q>F?~43i_Rz#yZag}k. ' );
define( 'SECURE_AUTH_KEY',  'gi#l$UkA+D;(N)z$!kQ-@JI{Z/-iQ^.2#?se$F=u.St*AX8/WSr#LX[7qp|TaZKF' );
define( 'LOGGED_IN_KEY',    'z[C_3s|,Q.qWXga{5iL^17e*`K}D3Id)y]wx;L`DXNaGv[^`AV]yE&%>GZ;_G`Ou' );
define( 'NONCE_KEY',        '_Hd$a3(XL$Xk>])8?RTTn1T-,|GaiP3XOeVirXk>IWV%(/pZ ?c AbGJ0Avq7@0{' );
define( 'AUTH_SALT',        'I(zFW2r!?Mk2r&-/b$n+v({?2|Sm!*A%[OccDSM*e>w(Nk{4 5O=hEt!B8$-{7DD' );
define( 'SECURE_AUTH_SALT', '?2Msmp8FqDy_;/ J^!lYtT*(<[x&6`M33a,En/sT$fKnOJEa.fw $0B,K)SkkzzM' );
define( 'LOGGED_IN_SALT',   'n6D8TiiB-78Dkq;6<CP(B<$By;mp()K{G99B5kPJ+tm-Neu8m^];eWioA%PG{g0f' );
define( 'NONCE_SALT',       '1;~Ff;y6P-,nNn[3tqpNP.x@K%bl#.O5C{.Ja3}(gO1)An0-ahP 98`L3V#{pTuQ' );

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
