<div class="container mezotur_tartalom_bg">
	<div class="row">
		<?php get_template_part( 'reszek/resz', 'bal_szelso' ); ?>
		<div class="col-7 mezotur_tartalom">
			<div id="mezotur_cimsav">
				<h2><?=the_title()?></h2>
				<?php
				if(is_single()) {
					get_template_part( 'reszek/resz', 'hirek_fejlec' );
				}
				?>
			</div>
		</div>
	</div>
</div>