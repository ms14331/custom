<?php
 
////////////////////////////////////////////////////////////////////////	 
// Definitions
////////////////////////////////////////////////////////////////////////
define('AUTHOR', 'http://www.fimedia.ca/solutions/');
define('THEME', 'snwa');
define('PREFIX', THEME.'_');
define('PREMETA', '_'.THEME.'_');
define('THEMENAME', 'Snow Auto');
define('SITEURL', get_bloginfo('url'));
define('THEMEURL', get_bloginfo('template_url')); // Or TEMPLATEPATH (UNIX)
define('IMG', THEMEURL.'/img');
define('JS', THEMEURL.'/js'); 
define('CSS', THEMEURL.'/css'); 
define('INC', THEMEURL.'/inc'); 

////////////////////////////////////////////////////////////////////////	 
// Includes
////////////////////////////////////////////////////////////////////////
require_once( TEMPLATEPATH."/inc/include-widgets.php");
require_once( TEMPLATEPATH."/inc/include-customposts.php");
require_once( TEMPLATEPATH."/inc/include-breadcrumbs.php");
require_once( TEMPLATEPATH."/inc/include-comments.php");	
require_once( TEMPLATEPATH."/inc/include-metabox.php");
require_once( TEMPLATEPATH."/inc/include-functions.php");
require_once( TEMPLATEPATH."/inc/include-settings.php");
require_once( TEMPLATEPATH."/inc/include-hooks.php");










function mailtrap($phpmailer)
{
    $phpmailer->isSMTP();
    $phpmailer->Host = 'mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'bbe03c365e8a90';
    $phpmailer->Password = '3aeb41ecc7bd8a';
}

add_action('phpmailer_init', 'mailtrap');










?>