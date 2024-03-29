<?php
defined('BASEPATH') OR exit('No direct script access allowed');

define('APP_NAME','Zukulee LMS');
define('CURRENCY_SYMBOL','$');

define('TBL_NOTIFICATION','notification');
define('TBL_POST','post');
define('NOIMG','images/no-image.png');
define('TBL_SLIDER','slider');
define('BGCOLOR','#170909');


define('ADMIN',1);
define('USER',2);
define('STAFF',3);
//  test data stripe keys
define('STRIPE_PUBLISH_KEY_TEST','pk_test_BEfHLR5BtxW50XonY31hQ6Pl00LVksM2GS');
define('STRIPE_SECRETE_KEY_TEST','sk_test_aWqGuC8LmctpHErVg2Wa3gvn00e6kOXCiy');
//live mode stripe keys
define('TBL_PAGES_CONTENT_IMAGES','tbl_images');


/*****Paypal adaptive constant******/
 //define('PAYPAL_REDIRECT_URL', 'https://www.sandbox.paypal.com/webscr&cmd=');
 define('PAYPAL_REDIRECT_URL', 'https://www.paypal.com/webscr&cmd=');
 define('DEVELOPER_PORTAL', 'https://developer.paypal.com');
/*****Paypal adaptive constant******/

define('PACKAGE_1',250);

define('PACKAGE_2',500);
define('PACKAGE_3',750);
define('PACKAGE_4',1000);




//define('STRIPE_PUBLISH_KEY','pk_live_VkGtyj9QwUIFZaMDjPKAbV9jd');
//define('STRIPE_SECRETE_KEY','sk_live_wFv5YmaPolya55J7CVbvjaljd');

/********
| MAIN CATEGORY TYPES
| To remember these it is in singular form like freelancer not freelancers
***********/
define('FRERLANCER','1');
define('NGO','2');
define('COMPANY','3');
define('JOBSEEKER','4');
define('INVENTION','5');
define('INVESTOR','6');
define('CONTRIBUTOR','7');
define('COURSE','8');
define('NAIRA_ID','186');
define('SUSPENDED','0');

/********
|  STATUSES
| ALL ORDER STATUSES
***********/
define('PENDING','0');
define('ACTIVE','1');
define('DELIVERED','2');
define('COMPLETED','3');
define('CANCELLED','4');
define('REVISION','5');
define('DISPUTED','7');
define('REFUNDED','8');

define('DISPUTED_MSG','Note:currently this order is now in Disputed state. Please contact to Skillsqaurd suppourt by send message.');

define('DEFAULT_RADIUS',1000);

/********
|  Notification type
|  start
***********/
//paypalsetting 

define('ORDER',0);
define('MESSAGE',1);

define('NEW_ORDER','You have New Order Now.');
define('FILE_SUBMIT_BY_SELLER','Seller submit a file against order.');

define('NEW_MESSAGE','Hi, you have new Message.');
define('ORDER_REVISE','Your submitted order has been Revised.');
define('ORDER_COMPLETED','Your submitted order has been accept by Buyer.');
// Your order has been moved into delivered state
/********
| Notification type
| end
***********/


define('HEADING','globalharvest');
define('FROM','noreply@globalharvest.com');

define('PAID',1);
define('CANCELLEDPAYPAL',2);


define('NORMAL',1);
define('CUSTOM',2);

define('PAYPAL',1);
define('STRIPE',2);
define('COMPLETE',1);
define('UNCOMPLETE',0);



define('SELLER',1);
define('BUYER',2);



/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);
//defined('ADMIN_ASSETS_URL','http://127.0.0.1/ims-dave/assets/admin/'); //local

define('ALLOWED_TYPES', 'jpg|gif|PNG|png|jpeg|JPG'); // Allwoed Types
define('ALLOWED_TYPES_SERVICES', 'jpg|jpeg|png|PNG');


/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/


defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


//Filter Range

define('FROM1',0); define('TO1',100);
define('FROM2',100); define('TO2',300);
define('FROM3',300); define('TO3',500);
define('FROM4',500); define('TO4',800);
define('FROM5',800); define('TO5',1200);
/************Status types*************/
 define('AND','and');


define('NOW',date('y-m-d H:i:s'));

/************user types*************/
 define('ADMIN_USER', 1);
define('MEMBER_USER', 2);
/************DB TABLES types*************/

define('TBL_CAT', 'categories');
define('TBL_CAT_IMAGES', 'categories_images');


/************DB TABLES types*************/

define('TBL_USER', 'users');
define('TBL_USERS_LOCATION', 'user_locations');
define('TBL_USERS_LEVELS','users_rights');

/************DB TABLES Language module*************/
define('TBL_COUNTRIES','countries');
define('TBL_COUNTRIES_LANGUAGES','countries_languages');
define('TBL_LANG_CAT','language_category');


define('TBL_FILES','files');
define('TBL_LBL_CHKBOX','label_checkboxes');

/************ALLOWED FILE TYPES*************/

define('ALLOWED_IMPORT_TYPES','txt|pdf|csv|zip|xlsx|doc|docx|pdf|PDF|jpg|jpeg|JPG|png');

