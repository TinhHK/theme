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