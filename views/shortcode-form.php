<?php

$shortcode_form = '<div class="whatapp-wrapper">';
$shortcode_form .= '<form class="whatapp-form" id="whatapp-form">';
$shortcode_form .= '<h3 class="whatapp-title">' . get_option( 'wp-phone-message-title' ) . '</h3>';
$shortcode_form .= '<p class="whatapp-text">' . get_option( 'wp-phone-message-text' ) . '</p>';
if ( get_option( 'wp-phone-message-name-active' ) ) {
    $shortcode_form .= '<input type="text" class="wp-phone-message-name" id="wp-phone-message-name" placeholder="' . get_option( 'wp-phone-message-name' ) . '"  ' . get_option( 'wp-phone-message-name-mandatory' ) . ' />';
}
if ( get_option( 'wp-phone-message-phone-active' ) ) {
    $shortcode_form .= '<input type="tel" class="wp-phone-message-phone" id="wp-phone-message-phone" placeholder="' . get_option( 'wp-phone-message-phone' ) . '"  ' . get_option( 'wp-phone-message-phone-mandatory' ) . ' />';
}
$shortcode_form .= '<textarea class="wp-phone-message-message" id="wp-phone-message-message" placeholder="' . get_option( 'wp-phone-message-textarea' ) . '" required ></textarea>';
$shortcode_form .= '<p class="whatapp-error" id="whatapp-error" ></p>';
$shortcode_form .= '<input type="submit" class="wp-phone-message-button" id="wp-phone-message-button" value="' . get_option( 'wp-phone-message-button' ) . '" />';
$shortcode_form .= '</form>';
$shortcode_form .= '</div>';