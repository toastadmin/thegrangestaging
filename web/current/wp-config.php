<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'thegrange_wp');

/** MySQL database username */
define('DB_USER', 'prod_dbadmin');

/** MySQL database password */
define('DB_PASSWORD', 'YLJ0lLJthXPZHgE');

/** MySQL hostname */
define('DB_HOST', 'prod-wordpress.cfsd6peqwyib.ap-southeast-2.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** AWS Wordpress S3 Access */
define( 'AWS_ACCESS_KEY_ID', 'AKIAIRIEYXJ2ZK7CMQKQ' );
define( 'AWS_SECRET_ACCESS_KEY', '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' );

/** PHP Memory Use */
define('WP_MEMORY_LIMIT', '64M');

define('WP_DEBUG', true);

/**
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Oq>y>,xE}q*l,A54I7md**|W?w9P-?VGdTD}I<?B?:sjO%mRd+8fl&2nSO;j20Qw');
define('SECURE_AUTH_KEY',  'Zc*Mn2+(Ji.4;4|24:6jQ~X*b5saXya|y-%pW1-qf5.RI6pYE$l5P-i0E}&-:]Q{');
define('LOGGED_IN_KEY',    'N#C_TG<>q!AO]?i`F|=/&1f+(@$zf]gLDx,tm5tSf/yF]kvk}w8k_168{_-1Uj&y');
define('NONCE_KEY',        'I(:SQ,)k[qwv$xWF$We,kmU{veW$o-Y{vO<3w<[>S#jN&,L]S%ZH*gp}WuBe{0NK');
define('AUTH_SALT',        '2qFN}-X|+c;[iLB(~$0^Rw%]=9ir.Y2DhF|r.[VQ%RVQ`Y@)AuJ(<^NF+Mt^Is3X');
define('SECURE_AUTH_SALT', '7%xeH6BE:al4B#`_= (=/v1;R2~9+TYI]Yv?n&QO7YsXtGyj1&TNl9U[P%%0GBe|');
define('LOGGED_IN_SALT',   'Vpi(-g[aAqF-PaV}HI]2J`DzP-|&iVbw6RP+ZsY1r_hZ/lHn<w1S^)y-yTfflA7M');
define('NONCE_SALT',       'Ei{wZ hH. fHw?m,HssYK%?NYG7t-7 mzIJ19wcPm z8{kGc_~vxL2sU?CXRF[kK');




/**
 * Use external cron
 */
define('DISABLE_WP_CRON', true);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');
