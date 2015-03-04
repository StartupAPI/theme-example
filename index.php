<?php

require_once(__DIR__ . '/users/users.php');

StartupAPI::$template->getLoader()->addPath(__DIR__ . '/templates/themeapp', 'themeapp');

// start with global template data needed for Startup API menus and stuff
$template_info = StartupAPI::getTemplateInfo();

// add more data for your page
$template_info['random_number'] = rand(1, 100);

StartupAPI::$template->display('@themeapp/index.html.twig', $template_info);
