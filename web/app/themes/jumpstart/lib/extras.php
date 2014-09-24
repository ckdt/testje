<?php
/**
* Clean up the_excerpt()
*/
function jumpstart_excerpt_more($more) {
	return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'jumpstart') . '</a>';
}
add_filter('excerpt_more', 'jumpstart_excerpt_more');

/**
* Remove clutter from main dashboard page.
*
* @link http://codex.wordpress.org/Dashboard_Widgets_API Turn off meta boxes.
*/
function jumpstart_disable_default_dashboard_widgets() {
// remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
// remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
// remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
// remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'jumpstart_disable_default_dashboard_widgets');