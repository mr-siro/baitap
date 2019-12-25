<?php get_header();?>
<div class="content">
	<div class="high-light">
		<div class="container">
			<div class="block-header">
				<p class="stt">01</p>
				<h3><?php the_field('heading_high_light'); ?></h3>
			</div>
			<div id="page">
				<div class="row">
					<div class="column small-11 small-centered">
						<div class="slider slider-for">
							<div>
								<div class="row item-1">
									<div class="col-md-6 img-hight-light">
										<?php 
										$image = get_field('image_new');
										if( !empty( $image ) ): ?>
											<img style="height: 275px; width: 425px;" class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									<div class="col-md-6 title-high-light content1">
										<a href="#"><?php the_field('new'); ?></a>
										<a href="#"><h5><?php the_field('title_new'); ?></h5></a>
										<p><?php the_field('content_new'); ?></p>
										<ul class="btn-readmore">
											<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
											<li><a style="color: #202d3d" href="#">Read More</a></li>
										</ul>
									</div>
								</div> <!--item1-->
							</div>
							<div>
								<div class="row item-2">
									<div class="col-md-6 img-hight-light">
										<?php 
										$image = get_field('image_new_2');
										if( !empty( $image ) ): ?>
											<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									<div class="col-md-6 title-high-light content2">
										<a href="#"><?php the_field('new_2'); ?></a>
										<a href="#"><h4><?php the_field('title_new_2'); ?></h4></a>
										<p><?php the_field('content_new_2'); ?></p>
										<ul class="btn-readmore">
											<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
											<li><a style="color: #202d3d" href="#">Read More</a></li>
										</ul>
									</div>
								</div> <!--item2-->
							</div>
							<div>
								<div class="row item-3">
									<div class="col-md-6 img-hight-light">
										<?php 
										$image = get_field('image_new_3');
										if( !empty( $image ) ): ?>
											<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									<div class="col-md-6 title-high-light content3">
										<a href="#"><?php the_field('new'); ?></a>
										<a href="#"><h4><?php the_field('title_new_2'); ?></h4></a>
										<p><?php the_field('content_new_2'); ?></p>
										<ul class="btn-readmore">
											<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
											<li><a style="color: #202d3d" href="#">Read More</a></li>
										</ul>
									</div>
								</div> <!--item3-->
							</div>
							<div>
								<div class="row item-4">
									<div class="col-md-6 img-hight-light">
										<?php 
										$image = get_field('image_new_4');
										if( !empty( $image ) ): ?>
											<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
										<?php endif; ?>
									</div>
									<div class="col-md-6 title-high-light content4">
										<a href="#"><?php the_field('new_2'); ?></a>
										<a href="#"><h4><?php the_field('title_new_2'); ?></h4></a>
										<p><?php the_field('content_new_2'); ?></p>
										<ul class="btn-readmore">
											<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
											<li><a style="color: #202d3d" href="#">Read More</a></li>
										</ul>
									</div>
								</div> <!--item4-->
							</div>
						</div> <!--slider for-->
						<div class="slider slider-nav">
							<div class="item">
								<div class="high-img">
									<?php 
									$image = get_field('image_new');
									if( !empty( $image ) ): ?>
										<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div  class="li-1">
									<a href="#"><?php the_field('new'); ?></a>
									<a href="#"><h4><?php the_field('title_new'); ?></h4></a>
									<p><?php the_field('content_new_1'); ?></p>
									<ul class="btn-readmore">
										<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
										<li><a style="color: #202d3d" href="#">Read More</a></li>
									</ul>
								</div>								
							</div><!--item1-->
							<div class="item">								
								<div class="high-img">
									<?php 
									$image = get_field('image_new_2');
									if( !empty( $image ) ): ?>
										<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div class="li-1">
									<a href="#"><?php the_field('new_2'); ?></a>
									<a href="#"><h4><?php the_field('title_new_2'); ?></h4></a>
									<p><?php the_field('content_new_2'); ?></p>
									<ul class="btn-readmore">
										<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
										<li><a style="color: #202d3d" href="#">Read More</a></li>
									</ul>
								</div>								
							</div> <!--item2-->
							<div class="item">								
								<div class="high-img">
									<?php 
									$image = get_field('image_new_3');
									if( !empty( $image ) ): ?>
										<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div class="li-1">
									<a href="#"><?php the_field('new'); ?></a>
									<a href="#"><h4><?php the_field('title_new_2'); ?></h4></a>
									<p><?php the_field('content_new_2'); ?></p>
									<ul class="btn-readmore">
										<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
										<li><a style="color: #202d3d" href="#">Read More</a></li>
									</ul>
								</div>								
							</div> <!--item3-->
							<div class="item">								
								<div class="high-img">
									<?php 
									$image = get_field('image_new_4');
									if( !empty( $image ) ): ?>
										<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									<?php endif; ?>
								</div>
								<div class="li-1">
									<a href="#"><?php the_field('new_2'); ?></a>
									<a href="#"><h4><?php the_field('title_new_2'); ?></h4></a>
									<p><?php the_field('content_new_2'); ?></p>
									<ul class="btn-readmore">
										<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
										<li><a style="color: #202d3d" href="#">Read More</a></li>
									</ul>
								</div>								
							</div> <!--item4-->
						</div> <!--slider nav-->
					</div>
				</div>
			</div>
		</div>
		<div class="view-more">
			<span>
				<a href="#">View More Articles</a>
			</span>
		</div>
	</div> <!--hight-light-->
	<div class="up-coming">
		<div class="container up-back">
			<div class="block-header stt2">
				<p class="stt">02</p>
				<div class="row">
					<div class="col-md-6 col-sm-3 col-xs-12 up-event">
						<h3>Upcoming Events</h3>
					</div>
					<div class="col-md-6 col-sm-9 col-xs-12 see-all">
						<ul class="btn-seeall">
							<li><a class="read-more" href="#"><i class="fa fa-arrow-right"></i></a></li>
							<li><a style="color: #202d3d" href="#">See all Events</a></li>
						</ul>
					</div>
				</div>
			</div> <!---block-header-->
			<div class="row up-row">
				<div class="col-md-4 item-up">
					<div class="up-img">
						<?php 
						$image = get_field('upcoming_img_1');
						if( !empty( $image ) ): ?>
							<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
					<div class="up-title">						
						<div class="up-date col-2">								
							<?php the_field('date_1'); ?>								
						</div>
						<div class="col-10">								
							<a href="#"><h6><?php the_field('upcoming_title_1'); ?></h6></a>
							<div class="time-up">
								<i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 13:00 PM | <i class="fa fa-users" aria-hidden="true"></i> 120 Going
							</div>			
						</div>						
					</div>
				</div> <!--item1-->
				<div class="col-md-4 item-up">
					<div class="up-img">
						<?php 
						$image = get_field('upcoming_img_2');
						if( !empty( $image ) ): ?>
							<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
					<div class="up-title">
						<div class="up-date col-2">								
							<?php the_field('date_2'); ?>								
						</div>
						<div class="col-10">								
							<a href="#"><h6><?php the_field('upcoming_title_2'); ?></h6></a>
							<div class="time-up time-up-2">
								<i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 13:00 PM | <i class="fa fa-users" aria-hidden="true"></i> 120 Going
							</div>				
						</div>	
					</div>
				</div> <!--item2-->
				<div class="col-md-4 item-up">
					<div class="up-img">
						<?php 
						$image = get_field('upcoming_img_3');
						if( !empty( $image ) ): ?>
							<img class="img-responsive" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
					</div>
					<div class="up-title">
						<div class="up-date col-2">								
							<?php the_field('date_3'); ?>								
						</div>
						<div class="col-10">								
							<a href="#"><h6><?php the_field('upcoming_title_3'); ?></h6></a>
							<div class="time-up">
								<i class="fa fa-clock-o" aria-hidden="true"></i> 09:00 AM - 13:00 PM | <i class="fa fa-users" aria-hidden="true"></i> 120 Going
							</div>	
						</div>	
					</div>
				</div> <!--item3-->
			</div>
		</div>
	</div> <!--up-coming-->
	<div class="member-ship" style="background-image: url(<?php echo get_theme_mod('img-body'); ?>);">
		<div class="content-member">
			<h2><?php the_field('heading_member'); ?></h2>
			<p><?php the_field('content_member'); ?></p>
			<button class="btn-member"><a href="#"><?php the_field('button_member'); ?></a></button>
		</div>		
	</div> <!---member-->
</div> <!--content-->

<?php get_footer();?>