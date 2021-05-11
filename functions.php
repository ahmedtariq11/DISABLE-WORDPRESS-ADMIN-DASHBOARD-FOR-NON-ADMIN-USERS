function disable_wp_admin() {
  if ( is_user_logged_in() && is_admin() && !current_user_can( 'manage_options' ) ) {
    wp_redirect( home_url() );
    exit;
  }
}
add_action( 'init', 'disable_wp_admin' );
