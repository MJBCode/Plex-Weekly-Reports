<?php

//PLEX
define("PLEX_API_KEY", "");
define("PLEX_URL", '');

//MAILGUN EMAIL
define("MAILGUN_KEY", '');
define("MAILGUN_DOMAIN", '');

//EMAIL SETTINGS
define("REPORT_TITLE", "Plex Weekly Summary");
define("REPORT_SUBTITLE", 'Server ('.date("Y-m-d").')');
define("EMAIL_FROM", 'Reports by Domain <noreply@domain.com>');
define("EMAIL_SUBJECT", 'Plex Weekly Summary - domain ('.date("Y-m-d").')');


//META DATABASE KEYS
define("MOVIEDB_KEY", "974eddb0f95ce2b912b9b37a63358823");
define("TVDB_KEY", "71362BFFDCA2C8CD");
define("OMDB_KEY", "eec31b8e");

//OTHER DEFINES
if($_SERVER['SERVER_PORT']=="443"){
	define("HTTP_HTTPS", "https://");
}else{
	define("HTTP_HTTPS", "http://");
}