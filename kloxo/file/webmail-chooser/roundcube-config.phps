<?php

/*
 +-----------------------------------------------------------------------+
 | Main configuration file                                               |
 |                                                                       |
 | This file is part of the RoundCube Webmail client                     |
 | Copyright (C) 2005-2008, RoundCube Dev. - Switzerland                 |
 | Licensed under the GNU GPL                                            |
 |                                                                       |
 +-----------------------------------------------------------------------+

*/

$rcmail_config = array();


// system error reporting: 1 = log; 2 = report (not implemented yet), 4 = show, 8 = trace
$rcmail_config['debug_level'] = 1;

// enable caching of messages and mailbox data in the local database.
// this is recommended if the IMAP server does not run on the same machine
$rcmail_config['enable_caching'] = TRUE;

// lifetime of message cache
// possible units: s, m, h, d, w
$rcmail_config['message_cache_lifetime'] = '10d';

// automatically create a new RoundCube user when log-in the first time.
// a new user will be created once the IMAP login succeeds.
// set to false if only registered users can use this service
$rcmail_config['auto_create_user'] = TRUE;

// the mail host chosen to perform the log-in
// leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// To use SSL connection, enter ssl://hostname:993
$rcmail_config['default_host'] = 'localhost';

// TCP port used for IMAP connections
$rcmail_config['default_port'] = 143;

// Automatically add this domain to user names for login
// Only for IMAP servers that require full e-mail addresses for login
// Specify an array with 'host' => 'domain' values to support multiple hosts
//$rcmail_config['username_domain'] = '';

// Automatically add this domain to user names for login
// Only for IMAP servers that require full e-mail addresses for login
// Specify an array with 'host' => 'domain' values to support multiple hosts
$__domain = $_SERVER['SERVER_NAME'];
if (strstr($__domain, "webmail.") !== false) {
	$__domain = substr($__domain, strlen("webmail."));
}
$rcmail_config['username_domain'] = $__domain;


// This domain will be used to form e-mail addresses of new users
// Specify an array with 'host' => 'domain' values to support multiple hosts
$rcmail_config['mail_domain'] = '';

// Path to a virtuser table file to resolve user names and e-mail addresses
$rcmail_config['virtuser_file'] = '';

// Query to resolve user names and e-mail addresses from the database
// %u will be replaced with the current username for login.
// The query should select the user's e-mail address as first col
$rcmail_config['virtuser_query'] = '';

// use this host for sending mails.
// to use SSL connection, set ssl://smtp.host.com
// if left blank, the PHP mail() function is used
$rcmail_config['smtp_server'] = '';

// SMTP port (default is 25; 465 for SSL)
$rcmail_config['smtp_port'] = 25;

// SMTP username (if required) if you use %u as the username RoundCube
// will use the current username for login
$rcmail_config['smtp_user'] = '';

// SMTP password (if required) if you use %p as the password RoundCube
// will use the current user's password for login
$rcmail_config['smtp_pass'] = '';

// SMTP AUTH type (DIGEST-MD5, CRAM-MD5, LOGIN, PLAIN or empty to use
// best server supported one)
$rcmail_config['smtp_auth_type'] = '';

// SMTP HELO host 
// Hostname to give to the remote server for SMTP 'HELO' or 'EHLO' messages 
// Leave this blank and you will get the server variable 'server_name' or 
// localhost if that isn't defined. 
$rcmail_config['smtp_helo_host'] = '';

// Log sent messages
$rcmail_config['smtp_log'] = TRUE;

// these cols are shown in the message list
// available cols are: subject, from, to, cc, replyto, date, size, encoding
$rcmail_config['list_cols'] = array('subject', 'from', 'date', 'size');

// relative path to the skin folder
$rcmail_config['skin_path'] = 'skins/default/';

// includes should be interpreted as PHP files
$rcmail_config['skin_include_php'] = FALSE;

// use this folder to store temp files (must be writebale for apache user)
$rcmail_config['temp_dir'] = 'temp/';

// use this folder to store log files (must be writebale for apache user)
$rcmail_config['log_dir'] = 'logs/';

// session lifetime in minutes
$rcmail_config['session_lifetime'] = 10;

// check client IP in session athorization
$rcmail_config['ip_check'] = false;

// Use an additional frequently changing cookie to athenticate user sessions.
// There have been problems reported with this feature.
$rcmail_config['double_auth'] = false;

// this key is used to encrypt the users imap password which is stored
// in the session record (and the client cookie if remember password is enabled).
// please provide a string of exactly 24 chars.
$rcmail_config['des_key'] = 'rcmail-!24ByteDESkey*Str';

// the default locale setting
$rcmail_config['locale_string'] = 'en';

// use this format for short date display
$rcmail_config['date_short'] = 'D H:i';

// use this format for detailed date/time formatting
$rcmail_config['date_long'] = 'd.m.Y H:i';

// use this format for today's date display
$rcmail_config['date_today'] = 'H:i';

// add this user-agent to message headers when sending
$rcmail_config['useragent'] = 'RoundCube Webmail/0.1';

// use this name to compose page titles
$rcmail_config['product_name'] = 'RoundCube Webmail';

// only list folders within this path
$rcmail_config['imap_root'] = '';

// store draft message is this mailbox
// leave blank if draft messages should not be stored
$rcmail_config['drafts_mbox'] = 'Drafts';

// store spam messages in this mailbox
$rcmail_config['junk_mbox'] = 'Spam';

// store sent message is this mailbox
// leave blank if sent messages should not be stored
$rcmail_config['sent_mbox'] = 'Sent';

// move messages to this folder when deleting them
// leave blank if they should be deleted directly
$rcmail_config['trash_mbox'] = 'Trash';

// display these folders separately in the mailbox list.
// these folders will also be displayed with localized names
$rcmail_config['default_imap_folders'] = array('INBOX', 'Drafts', 'Sent', 'Spam', 'Trash');

// automatically create the above listed default folders on login
$rcmail_config['create_default_folders'] = TRUE;

// protect the default folders from renames, deletes, and subscription changes
$rcmail_config['protect_default_folders'] = TRUE;

// Set TRUE if deleted messages should not be displayed
// This will make the application run slower
$rcmail_config['skip_deleted'] = FALSE;

// Set true to Mark deleted messages as read as well as deleted
// False means that a message's read status is not affected by marking it as deleted
$rcmail_config['read_when_deleted'] = TRUE;

// When a Trash folder is not present and a message is deleted, flag 
// the message for deletion rather than deleting it immediately.  Setting this to 
// false causes deleted messages to be permanantly removed if there is no Trash folder
$rcmail_config['flag_for_deletion'] = TRUE;

// Behavior if a received message requests a message delivery notification (read receipt)
// 0 = ask the user, 1 = send automatically, 2 = ignore (never send or ask)
$rcmail_config['mdn_requests'] = 0;

// Make use of the built-in spell checker. It is based on GoogieSpell.
// Since Google only accepts connections over https your PHP installatation
// requires to be compiled with Open SSL support
$rcmail_config['enable_spellcheck'] = TRUE;

// For a locally installed Nox Spell Server, please specify the URI to call it.
// Get Nox Spell Server from http://orangoo.com/labs/?page_id=72
// Leave empty to use the Google spell checking service, what means
// that the message content will be sent to Google in order to check spelling
$rcmail_config['spellcheck_uri'] = '';

// These languages can be selected for spell checking.
// Configure as a PHP style hash array: array('en'=>'English', 'de'=>'Deutsch');
// Leave empty for default set of Google spell check languages
$rcmail_config['spellcheck_languages'] = NULL;

// path to a text file which will be added to each sent message
// paths are relative to the RoundCube root folder
$rcmail_config['generic_message_footer'] = '';

// this string is used as a delimiter for message headers when sending
// leave empty for auto-detection
$rcmail_config['mail_header_delimiter'] = NULL;

// session domain: .example.org
$rcmail_config['session_domain'] = '';

// in order to enable public ldap search, create a config array
// like the Verisign example below. if you would like to test, 
// simply uncomment the Verisign example.
/** 
 * example config for Verisign directory
 *
 * $rcmail_config['ldap_public']['Verisign'] = array(
 *  'name'          => 'Verisign.com',
 *  'hosts'         => array('directory.verisign.com'),
 *  'port'          => 389,
 *  'base_dn'       => '',
 *  'bind_dn'       => '',
 *  'bind_pass'     => '',
 *  'ldap_version'  => 3,       // using LDAPv3
 *  'search_fields' => array('mail', 'cn'),  // fields to search in
 *  'name_field'    => 'cn',    // this field represents the contact's name
 *  'email_field'   => 'mail',  // this field represents the contact's e-mail
 *  'surname_field' => 'sn',    // this field represents the contact's last name
 *  'firstname_field' => 'gn',  // this field represents the contact's first name
 *  'scope'         => 'sub',   // search mode: sub|base|list
 *  'filter'        => '',      // used for basic listing (if not empty) and will be &'d with search queries. example: status=act
 *  'fuzzy_search'  => true);   // server allows wildcard search
 */

// don't allow these settings to be overriden by the user
$rcmail_config['dont_override'] = array();

// list of configuration option names that need to be available in Javascript.
$rcmail_config['javascript_config'] = array('read_when_deleted', 'flag_for_deletion');

// try to load host-specific configuration
$rcmail_config['include_host_config'] = FALSE;


/***** these settings can be overwritten by user's preferences *****/

// show up to X items in list view
$rcmail_config['pagesize'] = 40;

// use this timezone to display date/time
$rcmail_config['timezone'] = intval(date('O'))/100 - date('I');

// is daylight saving On?
$rcmail_config['dst_active'] = (bool)date('I');

// prefer displaying HTML messages
$rcmail_config['prefer_html'] = TRUE;

// compose html formatted messages by default
$rcmail_config['htmleditor'] = FALSE;

// show pretty dates as standard
$rcmail_config['prettydate'] = TRUE;

// default sort col
$rcmail_config['message_sort_col'] = 'date';

// default sort order
$rcmail_config['message_sort_order'] = 'DESC';

// save compose message every 300 seconds (5min)
$rcmail_config['draft_autosave'] = 300;

// default setting if preview pane is enabled
$rcmail_config['preview_pane'] = FALSE;

// don't let users set pagesize to more than this value if set
$rcmail_config['max_pagesize'] = 200;

// mime magic database
$rcmail_config['mime_magic'] = '/usr/share/misc/magic';

// end of config file
?>
