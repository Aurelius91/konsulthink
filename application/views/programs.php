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

			<div class="konsulthink-about">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<? if ($arr_section[1]->image_name == ''): ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/training.jpg);"></div>
							<? else: ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[1]->image_name; ?>);"></div>
							<? endif; ?>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<? if ($lang == $setting->setting__system_language || $arr_section[1]->subtitle_lang == ''): ?>
									<span class="heading-meta"><?= $arr_section[1]->subtitle; ?></span>
								<? else: ?>
									<span class="heading-meta"><?= $arr_section[1]->subtitle_lang; ?></span>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[1]->title_lang == ''): ?>
									<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[1]->title; ?></h2>
								<? else: ?>
									<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[1]->title_lang; ?></h2>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[1]->description_lang == ''): ?>
									<?= $arr_section[1]->description; ?>
								<? else: ?>
									<?= $arr_section[1]->description_lang; ?>
								<? endif; ?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<? if ($arr_section[1]->image_name == ''): ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/courses.jpg);"></div>
							<? else: ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[1]->image_name; ?>);"></div>
							<? endif; ?>
						</div>
						<div class="col-md-6 col-md-pull-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<? if ($lang == $setting->setting__system_language || $arr_section[2]->subtitle_lang == ''): ?>
									<span class="heading-meta"><?= $arr_section[2]->subtitle; ?></span>
								<? else: ?>
									<span class="heading-meta"><?= $arr_section[2]->subtitle_lang; ?></span>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[2]->title_lang == ''): ?>
									<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[2]->title; ?></h2>
								<? else: ?>
									<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[2]->title_lang; ?></h2>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[2]->description_lang == ''): ?>
									<?= $arr_section[2]->description; ?>
								<? else: ?>
									<?= $arr_section[2]->description_lang; ?>
								<? endif; ?>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<? if ($arr_section[3]->image_name == ''): ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/milenial-trip.jpg);"></div>
							<? else: ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[3]->image_name; ?>);"></div>
							<? endif; ?>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft" style="padding-top: 10px;">
							<div class="about-desc">
								<? if ($lang == $setting->setting__system_language || $arr_section[3]->subtitle_lang == ''): ?>
									<span class="heading-meta"><?= $arr_section[3]->subtitle; ?></span>
								<? else: ?>
									<span class="heading-meta"><?= $arr_section[3]->subtitle_lang; ?></span>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[3]->title_lang == ''): ?>
									<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[3]->title; ?></h2>
								<? else: ?>
									<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[3]->title_lang; ?></h2>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[3]->description_lang == ''): ?>
									<?= $arr_section[3]->description; ?>
								<? else: ?>
									<?= $arr_section[3]->description_lang; ?>
								<? endif; ?>
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

	<? $this->load->view('js'); ?>

	</body>
</html>

