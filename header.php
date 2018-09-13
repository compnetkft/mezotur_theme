<!DOCTYPE html>
<html lang="hu">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<?php wp_head();?>
		<link type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/csomagok/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/tema.css" rel="stylesheet" />
		<link type="text/css" href="<?php echo get_bloginfo('template_directory'); ?>/css/fontok.css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo get_bloginfo('template_directory'); ?>/js/nevnap.js"></script>
	</head>
	<body>
		<header class="container-fluid">
			<div class="container" style="background-image:url(<?php echo get_bloginfo('template_directory');?>/kepek/hatter2.png);">
				<img src="<?php echo get_bloginfo('template_directory');?>/kepek/logo.png" alt="" />
			</div>
		</header>
		<div class="container-fluid mezotur_felso_bg">
			<div class="container mezotur_felso">
				<div class="row">
					<div class="col-9">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li class="nav-item">
										<script type="text/javascript">
											document.writeln("<div id='nevnap_nap'><span class='nevnap'>" + ev + ". " + honev(ho) + " " + nap + ". " + napnev(ido.getDay()+1)
											+"</span> <span class='nevnap_fo'>Ma <span>"+havinev(ev,ho,nap)+"</span> napja van.</span></div>")
										</script>
									</li>
								</ul>
								<form role="search" method="get" class="form-inline my-2 my-lg-0" action="<?php echo home_url( '/' ); ?>">
									<input name="s" class="form-control mr-sm-2" type="search" placeholder="Keresés" aria-label="Search">
									<button class="btn btn-danger my-2 my-sm-0" type="submit">Keresés</button>
								</form>
							</div>
						</nav>
						<?php if ( is_page() && is_home() || is_front_page() ) : ?>
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<?php slider_kimenet() ?>
						</div>
						<?php endif; ?>
					</div>
					<?php get_template_part( 'reszek/resz', 'jobb_szelso' ); ?>
					<div class="col-9 mezotur_csempek">
					<?php wp_nav_menu( array( 'menu' => 'Csempék' ) ); ?>
					</div>
				</div>
			</div>
		</div>