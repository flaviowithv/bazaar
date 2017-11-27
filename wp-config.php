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
define('DB_NAME', 'bazaardb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{wG!o2FKrQlun1IJ-%D4DQ;DcV6BpNZ[{lfjq;bt}+(ty^X@E|j^Dx]PMy#%L5}z');
define('SECURE_AUTH_KEY',  'Z.Jk=XCI16Zo=4hzc9s7wP$CDu3<(8D.eWt.A=?:)7Zg%2XcCgCKw@p]E|*n:|M:');
define('LOGGED_IN_KEY',    't5n(?0:~>*Jq=DWhq(?O9EVD bKI|0GVi6;91]DAjn. |%PWyy##t2=aX|Rk-^EW');
define('NONCE_KEY',        'sK/4Ca$[V>aJ phG0_r)x}(:G7C(}KIq!S x$z^2a@7b:Od,H$XK(w}1STQ6WP``');
define('AUTH_SALT',        '$|z[}ZBYl?Z>o|}L<$t`mHRC<mTM6i#i$OVGL;K*-JV&:j>Pi]fT2PIx2K}Fuf;e');
define('SECURE_AUTH_SALT', 'TpV]^ 5seyp,Y2%9CrVi4>YuR?X;t^yR4E[Yt~[Xo@j$vlXLu+d[4UQKyXb.W|DL');
define('LOGGED_IN_SALT',   'Gg6NlSO5W&hwhR=TM5gcSa11cQRc4sy$=Oq>Wp0|o]QX<RfP;SRZB)fTvK~0trj?');
define('NONCE_SALT',       'K>aG.}}K3%6(x<P<O0tOw5K{j@>-4-(vA ;Ro{_BonzE@WYl8AAOE1:+h]G4^CON');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
