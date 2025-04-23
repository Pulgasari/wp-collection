// Check if Slug of Post or Page already exists
function the_slug_exists( string $slug ){
  global $wpdb;
  if( $wpdb->get_row("SELECT `post_name` FROM `{$wpdb->prefix}posts` WHERE `post_name` = '{$slug}'", 'ARRAY_A') ){
    return true;
  } else {
    return false;
  }
}
