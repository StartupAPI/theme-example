<?php

/* including local app config */
require_once(__DIR__ . '/config.php');

/**
 * You must fill it in with some random string
 * this protects some of your user's data when sent over the network
 * and must be different from other sites
 */
UserConfig::$SESSION_SECRET = $randomness;

/**
 * Database connectivity
 */
UserConfig::$mysql_db = $mysql_db;
UserConfig::$mysql_user = $mysql_user;
UserConfig::$mysql_password = $mysql_password;
#UserConfig::$mysql_host = 'localhost';
#UserConfig::$mysql_port = '...port...';
#UserConfig::$mysql_socket = $mysql_socket;

/**
 * Username and password registration configuration
 * just have these lines or comment them out if you don't want regular form registration
 */
UserConfig::loadModule('usernamepass');
new UsernamePasswordAuthenticationModule();

/**
 * User IDs of admins for this instance (to be able to access dashboard at /users/admin/)
 */
UserConfig::$admins[] = 1; // usually first user has ID of 1

/*
 * Name of your application to be used in UI and emails to users
 */
UserConfig::$appName = 'Bootstrap 3 app';

/**
 * StartupAPI theme
 */
UserConfig::$theme = 'awesome';

/**
 * If specified, StartupAPI::head() will include this Twitter Bootstrap Theme instead of default one
 */
UserConfig::$bootstrapTheme = 'sandstone';

/**
 * Enables developer tools beyond simple debugging
 * like Bootswatch theme switcher in 'awesome' theme, for example
 */
UserConfig::$DEVMODE = TRUE;
