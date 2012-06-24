<?php
 
/**
 * Settings for the Scratch theme
 */

defined('MOODLE_INTERNAL') || die;

// Adds our page to the structure of the admin tree

if ($ADMIN->fulltree) { 

// Theme colour setting
$name = 'theme_strawberry/themecolor';
$title = get_string('themecolor','theme_strawberry');
$description = get_string('themecolordesc', 'theme_strawberry');
$default = '#6ec13a';
$choices = array('#6ec13a'=>'green', '#990000'=>'red');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Decide whether to show an image or text in the header
$name = 'theme_strawberry/texttitle';
$title = get_string('texttitle','theme_strawberry');
$description = get_string('texttitledesc', 'theme_strawberry');
$default = 1;
$choices = array(0=>'Show logo', 1=>'Show custom text title', 2=>'Show course or site title');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Main title
$name = 'theme_strawberry/maintitle';
$title = get_string('maintitle','theme_strawberry');
$description = get_string('maintitledesc', 'theme_strawberry');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Subtitle
$name = 'theme_strawberry/mainsubtitle';
$title = get_string('mainsubtitle','theme_strawberry');
$description = get_string('mainsubtitledesc', 'theme_strawberry');
$setting = new admin_setting_configtext($name, $title, $description, '');
$settings->add($setting);

// Logo file setting
$name = 'theme_strawberry/logo';
$title = get_string('logo','theme_strawberry');
$description = get_string('logodesc', 'theme_strawberry');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Foot note setting
$name = 'theme_strawberry/footnote';
$title = get_string('footnote','theme_strawberry');
$description = get_string('footnotedesc', 'theme_strawberry');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$settings->add($setting);

// Show the credits to MoodleBites for Theme Designers
$name = 'theme_strawberry/mbcredits';
$title = get_string('mbcredits','theme_strawberry');
$description = get_string('mbcreditsdesc', 'theme_strawberry');
$default = 1;
$choices = array(0=>'No', 1=>'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Custom CSS file
$name = 'theme_strawberry/customcss';
$title = get_string('customcss','theme_strawberry');
$description = get_string('customcssdesc', 'theme_aerie');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$settings->add($setting);

}