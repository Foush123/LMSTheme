<?php
defined('MOODLE_INTERNAL') || die();

/**
 * Returns the main SCSS content for the theme.
 *
 * @param theme_config $theme
 * @return string
 */
function theme_yanfaa_get_main_scss_content($theme) {
    global $CFG;

    $scss = '';

    // 1) Add variables first so they can be used by presets.
    $variables = file_get_contents($CFG->dirroot . '/theme/yanfaa/scss/yanfaa/_variables.scss');
    if ($variables !== false) {
        $scss .= $variables . "\n";
    }

    // 2) Determine preset: admin-uploaded, theme local, or Boost defaults.
    $fs = get_file_storage();
    $context = context_system::instance();

    if (!empty($theme->settings->preset)) {
        $presetname = $theme->settings->preset;

        // Try admin-uploaded preset first.
        if ($presetname === 'default.scss' || $presetname === 'plain.scss') {
            $presetpath = $CFG->dirroot . '/theme/boost/scss/preset/' . $presetname;
            $scss .= file_get_contents($presetpath);
        } else if ($presetname === 'yanfaa.scss') {
            $presetpath = $CFG->dirroot . '/theme/yanfaa/scss/preset/yanfaa.scss';
            $scss .= file_get_contents($presetpath);
        } else if ($file = $fs->get_file($context->id, 'theme_yanfaa', 'preset', 0, '/', $presetname)) {
            $scss .= $file->get_content();
        }
    }

    // Fallback preset if none set.
    if ($scss === '') {
        $scss = file_get_contents($CFG->dirroot . '/theme/yanfaa/scss/preset/yanfaa.scss');
    }

    return $scss;
}


