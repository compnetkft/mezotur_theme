<?php
global $post;
$postcat = get_the_category( $post->ID );
?>
<span>Közzétéve: <span><?php the_time('Y. F j'); ?></span></span>
<?php echo $$postcat[0]->name; ?>