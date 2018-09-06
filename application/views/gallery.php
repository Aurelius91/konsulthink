		<div id="konsulthink-main">
			<div class="konsulthink-about no-padding">
				<div class="container-fluid no-padding">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<? if ($arr_section[0]->image_name == ''): ?>
									<div class="col-md-12" style="padding: 0;">
										<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/together-team.jpg); height: 60vh;">
											<? if ($lang == $setting->setting__system_language || $arr_section[0]->title_lang == ''): ?>
												<div class="bg-title"><?= $arr_section[0]->title; ?></div>
											<? else: ?>
												<div class="bg-title"><?= $arr_section[0]->title_lang; ?></div>
											<? endif; ?>
										</div>
									</div>
								<? else: ?>
									<div class="col-md-12" style="padding: 0;">
										<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[0]->image_name; ?>); height: 60vh;">
											<? if ($lang == $setting->setting__system_language || $arr_section[0]->title_lang == ''): ?>
												<div class="bg-title"><?= $arr_section[0]->title; ?></div>
											<? else: ?>
												<div class="bg-title"><?= $arr_section[0]->title_lang; ?></div>
											<? endif; ?>
										</div>
									</div>
								<? endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>


			<h3 style="width: 100%; text-align: center; padding: 30px 0;">@konsulthink</h3>
			<!-- SnapWidget -->
			<script src="https://snapwidget.com/js/snapwidget.js"></script>
			<iframe src="https://snapwidget.com/embed/586768" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
		</div>
	</div>

	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>assets/js/sticky-kit.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/skrollr.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

	<script type="text/javascript">
		$(function() {
			if($(window).width() > 768){
	            skrollr.init({
	            	forceHeight:false
	            });
	        }
		});
	</script>

	<? $this->load->view('js'); ?>

	</body>
</html>

