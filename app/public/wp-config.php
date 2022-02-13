<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JolbYhyERtnRx5kKgybGIyneWQrlMcxy/Uc4CQ9ksW27vPYQoSjmCUIilWLM95a7R0aQTgsWK+fw8ftaMvGUug==');
define('SECURE_AUTH_KEY',  '0GXr3chOCrDB+eF5xQi5MoDMdgFNktHiqAB3U9O1XwY6J1nCNwfGc4rST3vtJrhhEyrRm0TM5Agx8V6ZiEjIBA==');
define('LOGGED_IN_KEY',    'qresgODoxDTMTG00tUEY1sSZyH6hCnN+45sqPbgGggwo3BbecQsSMN9sylj8Zzz00mbpRu3L04zjT2l3+cntlQ==');
define('NONCE_KEY',        'Vh1/VF5Xr+T5E0SBFkZeoEKZ6yyESPc7CaYBtqQVZcfJBbYMnyaumB89Sn27E7C8btVvGPFW68ftReWNVlY8Ag==');
define('AUTH_SALT',        'SxIQZnfnPxQwZF/2T0FeNdvhwm24Dbf/PAaB+A6P0LK+MfalDAH2QgTIxniQU53Wr3BNtIaYiMSSxQNrYoS5mQ==');
define('SECURE_AUTH_SALT', 'Jmw/JO73MSb8xYIKytD/l1uOXqr1CEc9+uExXCg3d+ZrTpIvNclRFqSxabpATYzwWvoQS7Q+V9icz3NOFJ0CRg==');
define('LOGGED_IN_SALT',   'CHy8RLX3eSMW04oyB2dls2HcQ814ELXexIM25myO3dJE3E6f8QKVI4oukfprk3QSG9DeW3IPDr3yo/XeJtRasA==');
define('NONCE_SALT',       '4zYWzor538TYTcb8DezssEUfxfKsiAZxDdrmrN8fHGSoI+A9mA+5W8QzFNJSDhauz2wO1klzt4ofRHKFl9iaIw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
