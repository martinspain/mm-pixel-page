<?php
/******************************************************************************************
*   Million Pixel Script (R)
*   (C) 2005-2006 by texmedia.de, all rights reserved.
*   "Million Pixel Script" and "Pixel Script" is a registered Trademark of texmedia.
*
*   This script code is protected by international Copyright Law.
*   Any violations of copyright will be dealt with seriously,
*   and offenders will be prosecuted to the fullest extent of the law.
*
*   This program is not for free, you have to buy a copy-license for your domain.
*   This copyright notice and the header above have to remain intact.
*   You do not have the permission to sell the code or parts of this code or chanced
*   parts of this code for this program.
*   This program is distributed "as is" and without warranty of any
*   kind, either express or implied.
*
*   Please check
*   http://www.texmedia.de
*   for Bugfixes, Updates and Support.
******************************************************************************************/
@ini_set('include_path',".");
error_reporting(0);
$VERSIONS[basename(__FILE__)] = "3.0";
$showpicprocess = true;
include_once('incs/functions.php');

if($_GET['f']) $find = "(url LIKE '%".mysql_real_escape_string(stripslashes($_GET['f']))."%' OR title LIKE '%".mysql_real_escape_string(stripslashes($_GET['f']))."%') AND ";

$data = DB_array("SELECT userid FROM ".$dbprefix."user WHERE $find submit IS NOT NULL AND gridid='".(int)$_GET['gr']."'",'+');

print makemap(false,false,(int)$_GET['gr'],true,$data);

?>