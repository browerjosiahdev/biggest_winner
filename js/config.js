////////////////////////////////////////////////////////////////////////////////////////////////
// Group: Database Configuration.
////////////////////////////////////////////////////////////////////////////////////////////////

var DB_IPADDRESS    = '50.62.209.12';

// Live site settings.
/*var DB_USERNAME     = 'sysadmin';
var DB_PASSWORD     = 'Zikj3?67';
var DB_NAME         = 'biggest_winner';*/

// Test site settings.
var DB_USERNAME     = 'sysadmin_test';
var DB_PASSWORD     = 'ysdM70?8';
var DB_NAME         = 'biggest_winner_test';

var DB_URLSTRING    = 'dbUserName=' + DB_USERNAME + '&dbPassword=' + DB_PASSWORD + '&dbIP=' + DB_IPADDRESS + '&dbName=' + DB_NAME;

////////////////////////////////////////////////////////////////////////////////////////////////
// Group: Form Configuration.
////////////////////////////////////////////////////////////////////////////////////////////////

var INPUTEMAIL = 'INPUT_EMAIL';

////////////////////////////////////////////////////////////////////////////////////////////////
// Group: Email Configuration.
////////////////////////////////////////////////////////////////////////////////////////////////

var SMTP            = 'aspmx.l.google.com';
var MAILCLIENT      = 'biggestwinnertracker@gmail.com';
var EMAILTEMPLATE   = '%USER_NAME% just posted to the %FORUM% page!\r\n\r\n%EMAIL_BODY%\r\n\r\nTell them your opinion, and post a comment!';

var SMTP_URLSTRING  = 'smtp=' + SMTP + '&mailClient=' + MAILCLIENT + '&mailTo=%MAIL_TO%&subject=%SUBJECT%&message=%MESSAGE%';