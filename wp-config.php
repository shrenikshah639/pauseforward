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
define( 'DB_NAME', 'team2devhostserv_7' );

/** Database username */
define( 'DB_USER', 'team2devhostserv_7' );

/** Database password */
define( 'DB_PASSWORD', '6SpS50(.RW' );

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
define( 'AUTH_KEY',         'p36gesei9swxasegs1u0khfrj2f4gutnxi755hugqykgpaup297gbww5ot0o8e5x' );
define( 'SECURE_AUTH_KEY',  '3nyxza1ieti1qah22ngukg9ytmoglwsr6ywctxfzxpks6kfcnxxlrtin4uhotned' );
define( 'LOGGED_IN_KEY',    'po5cwtsjstvkduux45zviwtcnsc8i6xeetdbt9ycnguvhjsyfvblkopgghmsh68v' );
define( 'NONCE_KEY',        'eea4bfbbnkigvfb1mx0zkc0uu6qgixxiaohtxuceorm9jtgogt9hz8phpkxiixzm' );
define( 'AUTH_SALT',        'xxh60mpwptznd6yjx4w9v7rn52xyvubq7ymvmmtxyty1wxtfkdqj4exxlyxwcy5w' );
define( 'SECURE_AUTH_SALT', 'tzxqgjvyf5wxxiwya2a7hb2hyqr5rlgverny7udu0civl4ob6gigitfawcthpkxa' );
define( 'LOGGED_IN_SALT',   'tybk76fgvkhvjogho8fcucivqbfhaympmhbaffhxrlgazjr05bbe3xagjgk7ade9' );
define( 'NONCE_SALT',       'c28isprh1zm6jwiupbv04xq93p8e7mae0qb94heezd7q9omb7fctcxkvculd7x4w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp4q_';

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



define('DISABLE_WP_CRON', true);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
