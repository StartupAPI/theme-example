<?php
######################################################
##
##  Configuration file
##  Copy it to config.php and set values below
##
######################################################

/*
 * Set timezone of the server
 */
date_default_timezone_set('America/New_York');

/**
 * Source of randomness for security
 */
$randomness = '...some.random.characters.go.here...';

/**
 * MySQL configuration variables
 */
$mysql_db = 'themeapp';
$mysql_user = 'themeapp';
$mysql_password = '...password...';
#$mysql_socket = '/tmp/mysql.sock';