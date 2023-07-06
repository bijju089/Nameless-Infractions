<?php 
/*
 *  Forked from Infractions by Samerton
 *  https://github.com/samerton/Nameless-Infractions
 */
/*
 *  Infractions Module by BijjuXD
 *  NamelessMC Version 2.0.0-pr13
 *  License: MIT
 */
 
 // Initialise infractions language
$infractions_language = new Language(ROOT_PATH . '/modules/Infractions/language', LANGUAGE);

// Initialise module
require_once(ROOT_PATH . '/modules/Infractions/module.php');
$module = new Infractions_Module($language, $infractions_language, $pages);
