<?php
// +----------------------------------------------------------------------+
// | Anuko Time Tracker
// +----------------------------------------------------------------------+
// | Copyright (c) Anuko International Ltd. (https://www.anuko.com)
// +----------------------------------------------------------------------+
// | LIBERAL FREEWARE LICENSE: This source code document may be used
// | by anyone for any purpose, and freely redistributed alone or in
// | combination with other software, provided that the license is obeyed.
// |
// | There are only two ways to violate the license:
// |
// | 1. To redistribute this code in source form, with the copyright
// |    notice or license removed or altered. (Distributing in compiled
// |    forms without embedded copyright notices is permitted).
// |
// | 2. To redistribute modified versions of this code in *any* form
// |    that bears insufficient indications that the modifications are
// |    not the work of the original author(s).
// |
// | This license applies to this document only, not any other software
// | that it may be combined with.
// |
// +----------------------------------------------------------------------+
// | Contributors:
// | https://www.anuko.com/time_tracker/credits.htm
// +----------------------------------------------------------------------+


// Set include path for PEAR and its modules, which we include in the distribution.
//
set_include_path(realpath(dirname(__FILE__).'/lib/pear') . PATH_SEPARATOR . get_include_path());


// Database connection parameters.
//
// CHANGE 3 PARAMETERS HERE!
// In this example: "root" is username, "no" is password, "dbname" is database name.
//
//define('DSN', 'mysqli://alltic_tt:k4m1l40999@localhost/tv_timetracker?charset=utf8');
define('DSN', 'mysqli://aws_1:Alltic2017@localhost/tv_timetracker?charset=utf8');
// Do NOT change charset unless you upgraded from an older Time Tracker where charset was NOT specified
// and now you see some corrupted characters. See http://dev.mysql.com/doc/refman/5.0/en/charset-mysql.html


// MULTITEAM_MODE option defines whether users can create their own teams.
//
// Available values are true or false.
// If true users can create their own teams.
// If false only admin can create teams.
//
define('MULTITEAM_MODE', true);


// Application name.
// If you install time tracker into a sub-directory of your site reflect this in the APP_NAME parameter.
// For example, for http://localhost/timetracker/ define APP_NAME as 'timetracker'.
//
// define('APP_NAME', 'timetracker');
//
define('APP_NAME', 'tv_timetracker');


// OLD_PASSWORDS
//
// You may need to set this option if you migrate an older version of TT installation to a new server.
// Older versions of TT used mysql password function to hash user passwords. Newer versions use md5.
// Because the password function may behave differently between servers, the OLD_PASSWORD settings
// gives you an opportunity to control it, if needed.
//  
// define('OLD_PASSWORDS', true);


// Holidays. At this time holiday days are defined in the localization files (one file per language).
// The SHOW_HOLIDAYS option defines whether holidays are highlighted with holiday color.
//
define('SHOW_HOLIDAYS', true);


// COST_ON_REPORTS - defines the availability of the Cost field on the Reports page.
//
define('COST_ON_REPORTS', true);


// READONLY_START_FINISH - defines whether the start and finish fields on time entry pages are read-only.
// This applies to regular users only. Manager and co-managers can edit these values.
//
// define('READONLY_START_FINISH', false);


// FUTURE_ENTRIES - defines whether users can create entries for future dates. Defaults to true.
//
// define('FUTURE_ENTRIES', false);


// ALLOW_OVERLAP - defines whether overlapping time entries are allowed. Defaults to false.
//
// define('ALLOW_OVERLAP', true);


// WEEKEND_START_DAY
//
// This option defines which days are highlighted with weekend color.
// 6 means Saturday. For Saudi Arabia, etc. set it to 4 for Thursday and Friday to be weekend days.
//
define('WEEKEND_START_DAY', 6);


// PHPSESSID_TTL
//
// Lifetime in seconds for tt_PHPSESSID cookie. Time to live is extended by this value
// with each visit to the site so that users don't have to re-login. 
// define('PHPSESSID_TTL', 86400);


// Forum and help links from the main menu.
//
define('FORUM_LINK', 'https://www.anuko.com/forum/viewforum.php?f=4');
define('HELP_LINK', 'https://www.anuko.com/time_tracker/user_guide/index.htm');


// Default sender for mail.
//
define('SENDER', '"Anuko Time Tracker" <no-reply@timetracker.anuko.com>');


// MAIL_MODE - mail sending mode. Can be 'mail' or 'smtp'.
// 'mail' - sending through php mail() function.
// 'smtp' - sending directly through SMTP server.
// See https://www.anuko.com/time_tracker/install_guide/mail.htm
//
define('MAIL_MODE', 'smtp');
define('MAIL_SMTP_HOST', 'localhost'); // For gmail use 'ssl://smtp.gmail.com' instead of 'localhost' and port 465.
// define('MAIL_SMTP_PORT', '465');
// define('MAIL_SMTP_USER', 'yourname@yourdomain.com');
// define('MAIL_SMTP_PASSWORD', 'yourpassword');
// define('MAIL_SMTP_AUTH', true);
// define('MAIL_SMTP_DEBUG', true);


// CSS files. They are located in the root of Time Tracker installation.
//
define('DEFAULT_CSS', 'default.css');
define('RTL_CSS', 'rtl.css'); // For right to left languages.


// Default date format. Behaviour with not included formats is undefined. Possible values:
// '%Y-%m-%d'
// '%m/%d/%Y'
// '%d.%m.%Y'
// '%d.%m.%Y %a'
define('DATE_FORMAT_DEFAULT', '%Y-%m-%d');


// Default time format. Behaviour with not included formats is undefined. Possible values:
// '%H:%M'
// '%I:%M %p'
define('TIME_FORMAT_DEFAULT', '%H:%M');


// Default week start day.
// Possible values: 0 - 6. 0 means Sunday.
//
define('WEEK_START_DEFAULT', 0);


// Default language of the application.
// Possible values: en, fr, nl, etc. Empty string means the language is defined by user browser.
// 
define('LANG_DEFAULT', '');


// Default currency symbol. Use €, £, a more specific dollar like US$, CAD, etc.
// 
define('CURRENCY_DEFAULT', '$');


// EXPORT_DECIMAL_DURATION - defines whether time duration values are decimal in CSV and XML data exports (1.25 or 1,25 vs 1:15).
// 
define('EXPORT_DECIMAL_DURATION', true);


// REPORT_FOOTER - defines whether to use a footer on reports.
// 
define('REPORT_FOOTER', true);


// Authentication module (see WEB-INF/lib/auth/)
// Possible authentication methods:
//   db - internal database, logins and password hashes are stored in time tracker database.
//   ldap - authentication against an LDAP directory such as OpenLDAP or Windows Active Directory.
define('AUTH_MODULE', 'db');

// LDAP authentication examples.
// Go to https://www.anuko.com/time_tracker/install_guide/ldap_auth/index.htm for detailed configuration instructions.

// Configuration example for OpenLDAP server:
// define('AUTH_MODULE', 'ldap');
// $GLOBALS['AUTH_MODULE_PARAMS'] = array(
//  'server' => '127.0.0.1',                    // OpenLDAP server address or name.
//  'type' => 'openldap',                       // Type of server. openldap type should also work with Sun Directory Server when member_of is empty.
                                                // It may work with other (non Windows AD) LDAP servers. For Windows AD use the 'ad' type.
//  'base_dn' => 'ou=People,dc=example,dc=com', // Base distinguished name in LDAP catalog.
//  'default_domain' => 'example.com',          // Default domain.
//  'member_of' => array());                    // List of groups, membership in which is required for user to be authenticated.


// Configuration example for Windows domains with Active Directory:
// define('AUTH_MODULE', 'ldap');
// $GLOBALS['AUTH_MODULE_PARAMS'] = array(
//  'server' => '127.0.0.1',            // Domain controller IP address or name.
//  'type' => 'ad',                     // Type of server.
//  'base_dn' => 'DC=example,DC=com',   // Base distinguished name in LDAP catalog.
//  'default_domain' => 'example.com',  // Default domain.
//  'member_of' => array());            // List of groups, membership in which is required for user to be authenticated.

// define('AUTH_DEBUG', false); // Note: enabling AUTH_DEBUG breaks redirects as debug output is printed before setting redirect header. Do not enable on production systems.


// Team managers can set monthly work hour quota for years between the following  values.
// define('MONTHLY_QUOTA_YEAR_START', 2010); // If nothing is specified, it falls back to 2015.
// define('MONTHLY_QUOTA_YEAR_END', 2025);   // If nothing is specified, it falls back to 2030.

// Height in pixels for the note input field in time.php. Defaults to 40.
// define('NOTE_INPUT_HEIGHT', 100);
