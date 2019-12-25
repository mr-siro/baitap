<?php 
?>

</div>
</div>
</div><!-- #content -->

<?php do_action('fire_before_footer'); ?>

<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	<?php get_sidebar('footer'); ?>
<?php endif; ?>
<footer>
	<div class="container">
		<div class="row footer-row">
			<div class="col-md-4 about">
				<h6>About IAFPA</h6>
				<p>Suas bonorum perfecto eu vim. Labore possim cum id, erant quaeque deseruisse ut eos, at eumminim at the perfecto omittartur.</p>
				<button class="btn-footer"><a href="#">Learn More</a></button>
			</div>
			<div class="col-md-4 ship">
				<div class="row">
					<div class="col-6">
						<ul>
							<li>
								<h6>Membership</h6>
							</li>
							<li>
								<p>Member sign Up</p>
							</li>
							<li>
								<p>Membership Directory</p>
							</li>
						</ul>
					</div>
					<div class="col-6">
						<ul>
							<li>
								<h6>Events</h6>
							</li>
							<li>
								<p>Media</p>
							</li>
							<li>
								<p>contact</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4 event">
				<p style="color: #fafafa;">Join our mailing list and get the latest news and events today.</p>
				<form action="." method="post" class="form-subscribe" accept-charset="utf-8" id="form_subscription_acc">
					<input type="email" placeholder="Email Address" id="email_subscription" required="">
					<ul class="btn-readmore btn-mail">
						<li>
							<a class="read-sub" href="#"><i class="fa fa-arrow-right"></i></a>
						</li>
						<li>
							<a style="color: #fafafa;" href="#">subscribe</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
		<div class="connect">
			<ul class="lien-he">
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
				</a></li>
			</ul>
		</div>
	</div>
	<div class="copy-right">
		© 2018 International Aviation Fire Protection Association. All rights reserved.
	</div>
</footer>
<?php do_action('fire_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>