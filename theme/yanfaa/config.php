<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'yanfaa';
$THEME->parents = ['boost'];
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->usefallback = true;
$THEME->enable_dock = false;
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->iconsystem = \core\output\icon_system_fontawesome::class;

$THEME->scss = function($theme) { return theme_yanfaa_get_main_scss_content($theme); };

$THEME->layouts = [
    'frontpage' => array(
        'file' => 'frontpage.php',
        'regions' => array('side-pre'),
        'defaultregion' => 'side-pre',
        'options' => array('nonavbar' => true),
    ),
];


