<div class="container mezotur_tartalom_bg">
	<div class="row">
		<div class="col-3 mezotur_hirek">
			<h2>Helyi hírek</h2>
			<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>8, 'category_name' => 'kiemelt-hirek')); ?>
			<?php if ( $wpb_all_query->have_posts() ) : ?> 
			<ul>
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<h3><?php the_title(); ?></h3>
						<p><?=mezotur_hir_szovegresz(get_the_content())?></p>
					</a>
				</li>
			<?php endwhile; ?> 
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
		<div class="col-3 mezotur_hirek">
			<h2>Kiemelt hírek</h2>
			<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>8, 'category_name' => 'kiemelt-hirek')); ?>
			<?php if ( $wpb_all_query->have_posts() ) : ?> 
			<ul>
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<p><?=mezotur_hir_szovegresz(get_the_content())?></p>
					</a>
				</li>
			<?php endwhile; ?> 
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
		<div class="col-3 mezotur_hirek">
			<h2>A hét kiemelt hírei</h2>
			<?php $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>8, 'category_name' => 'kiemelt-hirek')); ?>
			<?php if ( $wpb_all_query->have_posts() ) : ?> 
			<ul>
			<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
					<h3><?php the_title(); ?></h3>
					<p><?=mezotur_hir_szovegresz(get_the_content())?></p>
					</a>
				</li>
			<?php endwhile; ?> 
			</ul>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</div>
	</div>
</div>