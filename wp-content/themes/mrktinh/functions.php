<?php
//<!--[if lt IE 9]>
//<script src="/wp-content/themes/mrktinh/js/html5.js" type="text/javascript"></script>
//<![endif]-->
//<meta name='robots' content='noindex,follow' />
//<link rel='stylesheet' href='/wp-content/themes/mrktinh/css/symple_shortcodes_styles.css' type='text/css' media='all' />
//<link rel='stylesheet' href='/wp-content/themes/mrktinh/css/style.css' type='text/css' media='all' />
//<link rel='stylesheet' href='/wp-content/themes/mrktinh/css/responsive.css' type='text/css' media='all' />
//<link rel='stylesheet' href='/wp-content/themes/mrktinh/css/site.css' type='text/css' media='all' />
//<script type='text/javascript' src='/wp-content/themes/mrktinh/js/jquery/jquery.js'></script>
//<script type='text/javascript' src='/wp-content/themes/mrktinh/js/jquery/jquery-migrate.min.js'></script>
//<!--[if IE 8]>
//<link rel="stylesheet" type="text/css" href="css/ie8.css" media="screen">
//<![endif]-->

/*<script type='text/javascript' src='/wp-content/themes/mrktinh/js/jquery.form.min.js'></script>
<script type='text/javascript' src='/wp-content/themes/mrktinh/js/scripts.js'></script>
<script type='text/javascript' src='/wp-content/themes/mrktinh/js/plugins.js'></script>
<script type='text/javascript'>
    var wpexLocalize = {
    "mobileMenuOpen" : "Browse Categories",
        "mobileMenuClosed" : "Close navigation",
        "homeSlideshow" : "false",
        "homeSlideshowSpeed" : "7000",
        "UsernamePlaceholder" : "Username",
        "PasswordPlaceholder" : "Password",
        "enableFitvids" : "true"
    };
</script>
<script type='text/javascript' src='/wp-content/themes/mrktinh/js/global.js'></script>*/

add_action('wp_enqueue_scripts', 'mrk_register_style');

function mrk_register_style()
{
    global $wp_styles;
    $cssUrl = get_template_directory_uri().'/css';
    wp_register_style('mrk_theme_symple_shortcodes', $cssUrl.'/symple_shortcodes_styles.css', [], '1.0');
    wp_enqueue_style('mrk_theme_symple_shortcodes');

    wp_register_style('mrk_theme_style', $cssUrl.'/style.css', [], '1.0');
    wp_enqueue_style('mrk_theme_style');

    wp_register_style('mrk_theme_responsive', $cssUrl.'/responsive.css', [], '1.0');
    wp_enqueue_style('mrk_theme_responsive');

    wp_register_style('mrk_theme_site', $cssUrl.'/site.css', [], '1.0');
    wp_enqueue_style('mrk_theme_site');

    wp_register_style('mrk_theme_ie8', $cssUrl.'/ie8.css', [], '1.0');
    $wp_styles->add_data('mrk_theme_ie8', 'conditional', 'IE 8');
    wp_enqueue_style('mrk_theme_ie8');

}

add_action('wp_enqueue_scripts', 'mrk_register_script');

function mrk_register_script()
{
    $jsUrl = get_template_directory_uri().'/js';
    wp_register_script('mrk_theme_jquery', $jsUrl.'/jquery/jquery.js', [], '1.0', true);
    wp_enqueue_script('mrk_theme_jquery');

    wp_register_script('mrk_theme_jquery_migrate', $jsUrl.'/jquery/jquery-migrate.min.js', [], '1.0', true);
    wp_enqueue_script('mrk_theme_jquery_migrate');

    wp_register_script('mrk_theme_jquery_form', $jsUrl.'/jquery.form.min.js', [], '1.0', true);
    wp_enqueue_script('mrk_theme_jquery_form');

    wp_register_script('mrk_theme_script', $jsUrl.'/scripts.js', [], '1.0', true);
    wp_enqueue_script('mrk_theme_script');

    wp_register_script('mrk_theme_plugin', $jsUrl.'/plugins.js', [], '1.0', true);
    wp_enqueue_script('mrk_theme_plugin');

    wp_register_script('mrk_theme_global', $jsUrl.'/global.js', [], '1.0', true);
    wp_enqueue_script('mrk_theme_global');
}