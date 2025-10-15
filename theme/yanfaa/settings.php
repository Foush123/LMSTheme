<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $settings = new admin_settingpage('theme_yanfaa', get_string('pluginname', 'theme_yanfaa'));

    // Preset selector (includes Boost defaults and theme local).
    $name = 'theme_yanfaa/preset';
    $title = get_string('preset', 'theme_yanfaa');
    $description = get_string('preset_desc', 'theme_yanfaa');
    $choices = [];
    $choices['default.scss'] = 'default.scss';
    $choices['plain.scss'] = 'plain.scss';
    $choices['yanfaa.scss'] = 'yanfaa.scss';
    $setting = new admin_setting_configselect($name, $title, $description, 'yanfaa.scss', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Allow admins to upload additional presets.
    $name = 'theme_yanfaa/presetfiles';
    $title = get_string('presetfiles', 'theme_yanfaa');
    $description = get_string('presetfiles_desc', 'theme_yanfaa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'preset', 0,
        ['maxfiles' => 20, 'accepted_types' => ['.scss']]);
    $settings->add($setting);

    // Brand color.
    $name = 'theme_yanfaa/brandcolor';
    $title = get_string('brandcolor', 'theme_yanfaa');
    $description = get_string('brandcolor_desc', 'theme_yanfaa');
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0f766e');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo.
    $name = 'theme_yanfaa/logo';
    $title = get_string('logo', 'theme_yanfaa');
    $description = get_string('logo_desc', 'theme_yanfaa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $settings->add($setting);

    // Favicon.
    $name = 'theme_yanfaa/favicon';
    $title = get_string('favicon', 'theme_yanfaa');
    $description = get_string('favicon_desc', 'theme_yanfaa');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $settings->add($setting);

    $ADMIN->add('themes', $settings);
}


