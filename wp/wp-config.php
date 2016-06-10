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
define('DB_NAME', 'u837502189_yzuje');

/** MySQL database username */
define('DB_USER', 'u837502189_yvuwe');

/** MySQL database password */
define('DB_PASSWORD', 'aLuXevyQuM');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Fq7I11iwD0xdyzXTDX5dM13ULs7d0iIKkYJYCFG9QI3xY2savndY0tOdCLWaezuV');
define('SECURE_AUTH_KEY',  'de53PnXlqXKmEfNpdWewSWlbij89kSvDyyqtk4n6Z7xXeoXP9SEbboO3moQbS79m');
define('LOGGED_IN_KEY',    'ehZmotKmYVtFbc2sCkaOIrMU9YBjSdU9arQtjH1VzumSWnb3cDUxuzQTNQ04e5SP');
define('NONCE_KEY',        '7SJfagUAtJQglXuVukl3LCn1V4IjxDZyiMKEH9nU6x3jx3Z0mFVVXBaPqnz96TEJ');
define('AUTH_SALT',        'cBtAKkHkp8Jyn2f529CLhHndKtbRFhv5hA94hqS2pZwB4hR9Ls6rhztrZueXen2G');
define('SECURE_AUTH_SALT', 'q7rDIT2Eko1P7tZw5H3A0SEtiJCXSGBojx4WnF9zjvJJucTOxHW8lg8kPsT9GzeV');
define('LOGGED_IN_SALT',   'dQtSRycD1hYjMkjQW36ZcLLjoc9S7AI8BWP1uXaun0MccmJ9jUr8FdVqbxhFumRH');
define('NONCE_SALT',       'uGXGk1E0Gme8ZaNUDtInAWp4bja3Z3CaQiR6PgsN5sG0J7YTrhd16q9NJ8RDtuuS');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'quam_';

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
