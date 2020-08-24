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
define('AUTH_KEY',         'AfaNdd1J2FeLOUNuimeMLP7fkZh+X5umALoTGQWFltpaOxHx5ls19LH5Z5iZCdM8XzYVTzr0PrkJuUcFfw4TMw==');
define('SECURE_AUTH_KEY',  'h/bflDfyUCRGsbw4miW1LwiHTJwKxlf+948Akaro9REx9Ui4+RI9H8OWpxEUNGdDlHHA+FV/DABCtq1NplqaBA==');
define('LOGGED_IN_KEY',    'fEXITNxzbVKV0qzLbXbv5Nc6vDq1vfD+xnlTaX1htIhTe8jybyiVGWRsvnfKk72MH8Em6XAZnkf0LFSSOanRUw==');
define('NONCE_KEY',        'rxsWc/sC1oDFTq6JzURKaKqCiMOXfYj7uRqnz4k+m8lq84qOvMniOZ3vMcAdxJZ5y4TFhgbii92Rp+E5Uil5SQ==');
define('AUTH_SALT',        'GtBL7p5LTDCIqWCZOo/+Zympet/DXPik5PceE2MfghjEFTPZoZo4MM4ETuejoP5yySPX9HXufdnlD6RzVGUDAw==');
define('SECURE_AUTH_SALT', '80MX1UuB9u3du50HseNMomkUf4VP0xFIKo2eDrOchrF6zjc7fjKFvfo+m1iBNUGlvTrC8iHQZX3teSuSrZQI9Q==');
define('LOGGED_IN_SALT',   'o05SzpmEbouKeMMdkIWL0kIuWRyAzGgtn8b5DzVRY+k1/gD+HKE9aFbpImsI+yS8G2Z3bG1lioZF2uAx9s2RAw==');
define('NONCE_SALT',       'qLd7+HQmwkdFgYaqGbJjlLY0WhZbaeEyMpsFl6FXWX4jpPaUeWAWEvHGUxCrYP8bJ4KT2s58NjAita9d1uaauw==');

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
