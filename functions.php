<?php
# by NES
# v0.1
#
# Wordpress alap beállítások
function weblap_cim() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'weblap_cim' );

// Kiemelt képek engedélyezése
add_theme_support( 'post-thumbnails' );

function mezotur_hir_szovegresz($szoveg){
	$szoveg = strip_tags($szoveg);
	$szoveg = strtok($szoveg, "\n");
	return  wp_trim_words( strip_tags($szoveg), 15 );
} 

function widgetek() {
    register_sidebar( array(
        'name' => __( 'Jobb fixmenü', 'jobb_fix' ),
        'id' => 'mezotur_jobb_fix',
        'before_widget' => '<div class="widget widget_recent_entries">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
	register_sidebar( array(
        'name' => __( 'Bal dinamikus menü', 'bal_din' ),
        'id' => 'mezotur_bal_din',
        'before_widget' => '<div class="widget widget_recent_entries">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'widgetek' );

function slider_kepek() {
	$szures = array(
		'taxonomy' => 'media_category',
		'field' => 'slug',
		'terms' => 'slider'
	);
	$talalat = false;
	foreach(get_terms($szures) as $kategoria) {
		if(!empty($kategoria) && $kategoria->slug == "slider") {
			$talalat = $kategoria->term_id;
			break;
		}
	}
	if($talalat !== false) {
		$the_query = new WP_Query(array(
			'post_type' => 'attachment',
			'post_status' => 'any',
			'tax_query' => array(
				array(
					'taxonomy' => 'media_category',
					'field' => 'id',
					'terms' => $talalat
				)
			)
		));
		if ( $the_query->have_posts() ) {
			$kepek = array();
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$kepek[] = wp_get_attachment_image( get_the_ID(), 'full', '', array( "class" => "d-block w-100 img-fluid" ) );
			}
			return $kepek;
		} else {
			return false;
		}
 	
	} else {
		return false;
	}
}
function slider_kimenet() {
	$kepek = slider_kepek();
	if($kepek !== false) {
		echo '<ol class="carousel-indicators">';
		$vissza = null;
		for($i=0;$i<=count($kepek)-1;$i++) {
			$aktiv = $i == 0 ? ' class="active"' : null;
			echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"'.$aktiv.'></li>';
		}
		echo '</ol>';
		echo '<div class="carousel-inner">';
		$i = 0;
		foreach($kepek as $kep) {
			$aktiv = $i++ == 0 ?  ' active' : null;
			echo '<div class="carousel-item'.$aktiv.'">';
			echo $kep;
			echo '</div>';
		}
		echo '</div>';
	} else {
		return;
	}
}
?>