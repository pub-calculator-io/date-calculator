<?php
/*
Plugin Name: Date Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/date-calculator/
Description: Free calculator to effortlessly evaluate the difference between dates. Easily add or subtract days from any date, with or without holidays and weekends.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_date_calculator
*/

if (!function_exists('add_shortcode')) return "No direct call for Date Calculator by Calculator.iO";

function display_ci_date_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/date-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Date Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_date_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_date_calculator', 'display_ci_date_calculator' );