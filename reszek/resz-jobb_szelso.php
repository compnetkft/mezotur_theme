<div class="col-3 mezotur_linkek">
	<aside>
		<div class="mezotur_cimer">
			<img src="<?=get_bloginfo('template_directory')?>/kepek/varos_cimer.png" alt="" />
		</div>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Jobb fixmenü") ) : ?>
		<?php endif;?>
	</aside>
</div>