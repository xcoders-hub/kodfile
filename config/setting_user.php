<?php 
define('INSTALL_CHANNEL','lamp');

$GLOBALS["config"]['defaultPlugins'] = array(
	'DPlayer','imageExif','jPlayer','picasa',//'pdfjs',
	'simpleClock','toolsCommon','VLCPlayer','webodf','yzOffice','zipView'
);
$GLOBALS["config"]['settingSystemDefault']['wallpageDesktop'] = "2,8";
$GLOBALS["config"]['settingSystemDefault']['wallpageLogin'] = "2,8";
$GLOBALS["config"]['settingAll']['language'] = array(
    "en"	=>	array("English","英语","English"),
    "zh-CN"	=>	array("简体中文","简体中文","Simplified Chinese"),
    "zh-TW"	=>	array("繁體中文","繁體中文","Traditional Chinese"),
);
$GLOBALS["config"]['settingAll']['themeall'] = "mac,win10,win7,metro,alpha_image,diy";