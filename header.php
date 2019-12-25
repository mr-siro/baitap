<?php 
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<?php if (!function_exists('has_site_icon') || !has_site_icon()):?>
	<?php if (get_theme_mod('site_favicon')):?>
		<link rel="shortcut icon" href="<?php echo esc_url(get_theme_mod('site_favicon'));?>" />
	<?php endif;?>
<?php endif;?>
<?php wp_head();?>
</head>
<body>
	<header class="header" style="background-color: initial;" id="masthead" role="banner">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-3 col-xs-12 logo">
						<?php (get_theme_mod('site_logo'))?>
						<a href="<?php echo esc_url(home_url('/'));?>" title="<?php bloginfo('name');?>"><img class="site-logo" src="<?php echo esc_url(get_theme_mod('site_logo'));?>" alt="<?php bloginfo('name');?>" /></a> 
					</div> <!---logo-->
					<div class="col-md-10 col-sm-9 col-xs-12">
						<nav class="navbar">
							<div class="container">
								

								<ul>
									<button type="button" class="but-menu"><i class="fa fa-bars"></i></button>
									<li class="navbar-nav new-menu">
										<?php wp_nav_menu(array('theme_location' => 'primary', 'fallback_cb' => 'fire_menu_fallback'));?>
									</li>
									<li class="social">
										<ul class="list-social">
											<li class="member"><span class="become"><a class="a-become" href="#">Become a Member</a></span></li>
											<li class="user-id"><a class="user" href="#"><i class="fa fa-user-o"></i></a>
												<ul class="dang-ky">
													<li class="sign"><a href="#">Sign in</a></li>
													<li class="sign"><a href="#">Sign up</a></li>
												</ul>
											</li>
											<li class="search"><a class="search-icon" href="#"><i class="fa fa-search" ></i></a></li>
										</ul>
									</li>
									<li class="timkiem-desktop">
										<form class="form" >
											<div class="input-group">
												<input name="s" class="form-control" type="text" placeholder="Search" aria-label="Search" style="padding-left: 68px; border-radius: 40px; font-size: 12px;" id="mysearch">
												<div class="input-group-addon" style="margin-left: -50px; z-index: 3; border-radius: 40px; background-color: transparent; border:none;">
													<button class="btn btn-warning btn-sm" type="submit" style="border-radius: 20px;" id="search-btn"><i class="fa fa-search"></i></button>
												</div>
											</div>
										</form>
									</li>
								</ul>

								<div class="show-menu">
									<div class="scrollbar">
										<div class="force-overflow"><?php wp_nav_menu(array('theme_location' => 'mobile-menu', 'fallback_cb' => 'fire_menu_fallback'));?></div>
										<li class="mem-mobi"><span class="become"><a class="a-become" href="#">Become a Member</a></span></li>
									</div>
								</div>
							</div>
						</nav>
					</div> <!---menu-->
				</div>
			</div>
		</div>
	</header>
	<?php do_action('iei_after_header'); ?>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active header-img">
				<img class="d-block w-100" src="<?php echo get_theme_mod('img-head'); ?>);" alt="First slide">
				<div class="carousel-caption d-none d-md-block">
					<h1><?php echo get_theme_mod('slide_title_1'); ?></h1>
					<p><?php echo get_theme_mod('slide_subtitle_1'); ?></p>
					<p><?php echo get_theme_mod('slide_subtitle_1_2'); ?></p>
				</div>
			</div>
			<div class="carousel-item header-img">
				<img class="d-block w-100" src="<?php echo get_theme_mod('img-head-2'); ?>);" alt="Second slide">
				<div class="carousel-caption d-none d-md-block">
					<h1><?php echo get_theme_mod('slide_title_2'); ?></h1>
					<p><?php echo get_theme_mod('slide_subtitle_2'); ?></p>
					<p><?php echo get_theme_mod('slide_subtitle_2_2'); ?></p>
				</div>
			</div>
			<div class="carousel-item header-img">
				<img class="d-block w-100" src="<?php echo get_theme_mod('img-head-3'); ?>);" alt="Third slide">
				<div class="carousel-caption d-none d-md-block">
					<h1><?php echo get_theme_mod('slide_title_3'); ?></h1>
					<p><?php echo get_theme_mod('slide_subtitle_3'); ?></p>
					<p><?php echo get_theme_mod('slide_subtitle_3_2'); ?></p>
				</div>
			</div>
		</div>
  <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a> -->
</div>