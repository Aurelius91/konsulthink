		<div id="konsulthink-main">
			<div class="konsulthink-work">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft">EVENTS</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 image-content">
							<img class="img-responsive" src="<?= $setting->setting__system_admin_url; ?>images/website/<?= $events->image_name; ?>">

							<? foreach ($events->arr_image_events as $image_events): ?>
								<img class="img-responsive" src="<?= $setting->setting__system_admin_url; ?>images/website/<?= $image_events; ?>">
							<? endforeach; ?>
						</div>
						<div class="col-md-4 sticky-parent">
							<div id="sticky_item">
								<div class="project-desc">
									<? if ($lang == $setting->setting__system_language || $events->name_lang == ''): ?>
										<h2><?= $events->name; ?></h2>
									<? else: ?>
										<h2><?= $events->name_lang; ?></h2>
									<? endif; ?>

									<? if ($lang == $setting->setting__system_language || $events->about_lang == ''): ?>
										<span><?= $events->about; ?></span>
									<? else: ?>
										<span><?= $events->about_lang; ?></span>
									<? endif; ?>

									<? if ($lang == $setting->setting__system_language || $events->description_lang == ''): ?>
										<?= $events->description; ?>
									<? else: ?>
										<?= $events->description_lang; ?>
									<? endif; ?>

									<? if ($events->upcoming > 0): ?>
										<? if ($lang == $setting->setting__system_language): ?>
											<p><a href="<?= base_url(); ?>preview/events/register/<?= $events->url_name; ?>/" class="btn-download">Register Now</a></p>
										<? else: ?>
											<p><a href="<?= base_url(); ?>preview/events/register/<?= $events->url_name; ?>/" class="btn-download">Registrasi Sekarang</a></p>
										<? endif; ?>
									<? endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>assets/js/sticky-kit.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

	<? $this->load->view('preview/js'); ?>

	</body>
</html>

