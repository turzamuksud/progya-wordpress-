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
define('DB_NAME', 'biidafri_progya');

/** MySQL database username */
define('DB_USER', 'biidafri_progya');

/** MySQL database password */
define('DB_PASSWORD', 'biidafri_progya123456');

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
define('AUTH_KEY',         'S5dqrO=l3tn$!~=QU:DIu4cIJ FqUBNgRepU+KkB`)M$~/L#p%g8]Z?ZLo%,Rn!1');
define('SECURE_AUTH_KEY',  'L(S0LM(uPqH{a4x0Dor5JCFBxpl<t2Gyc|}.Rw?an]|,%|^RJ]{Kwlp?x<OF+}t_');
define('LOGGED_IN_KEY',    'S}E^a5u|#*scst&>x-EPf$@9usj&f1R1d*H!3=PCXcGw.8vj9u;5BjlW@7Z$,&;k');
define('NONCE_KEY',        ';Oc:O4A^@I;D?)0N1orI~`(Ltwk7H4|9/+oA5h:JL%.Z)Ftl|I]l[Ny}>d;XF$Ub');
define('AUTH_SALT',        'k:BGN?&;=T6D!Pk%uj6a<E{t~&nYvp-lR@/PVDKi/a<8+|& O |qkRB=7@#r]Xia');
define('SECURE_AUTH_SALT', ' f2e}sdz`BvH5hoHGr2VJzLqfdtI|5~OV`|G|iys3KGEjo#kn$yW;V%ru_Z .Ayr');
define('LOGGED_IN_SALT',   ' kv1*30d7-E@)8wT2k4ktM_1]=.RHnb|eH:?FVVNi[!#Fy$Y6>Ow_C8[)EjOB?&D');
define('NONCE_SALT',       ';>r~BfB~}E4|<^_KY}B}Mo_D)J`k%N(IkS#t2WH%hY-CREXl+pDMb67fW&U(cX^h');

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

/*hjghh*/
define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'kmp123456@2018' );