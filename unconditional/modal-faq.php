<?php
  require( dirname( __FILE__ ) . '/wp-blog-header.php' );
  query_posts(array ( 'category_name' => 'faq' ));
  while (have_posts()) : the_post();
  the_content();
  endwhile;
?>
