<?php
defined('MOODLE_INTERNAL') || die();

function theme_yanfaa_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';

    $variablespath = $CFG->dirroot . '/theme/yanfaa/scss/yanfaa/_variables.scss';
    if (file_exists($variablespath)) {
        $scss .= file_get_contents($variablespath) . "\n";
    }

    $preset = 'yanfaa.scss';
    if (!empty($theme->settings->preset)) {
        $preset = $theme->settings->preset;
    }

    $fs = get_file_storage();
    $sysctx = context_system::instance();

    if ($preset === 'default.scss' || $preset === 'plain.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/boost/scss/preset/' . $preset);
    } else if ($preset === 'yanfaa.scss') {
        $scss .= file_get_contents($CFG->dirroot . '/theme/yanfaa/scss/preset/yanfaa.scss');
    } else if ($file = $fs->get_file($sysctx->id, 'theme_yanfaa', 'preset', 0, '/', $preset)) {
        $scss .= $file->get_content();
    }

    return $scss;
}


