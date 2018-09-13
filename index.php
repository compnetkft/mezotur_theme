<?php
get_header();
if ( is_page() && is_home() || is_front_page()  ) :
	get_template_part( 'reszek/resz', 'fooldal' );
else :
	get_template_part( 'content', get_post_format() );
endif;
get_footer();
?>	