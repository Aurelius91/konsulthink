		<div id="konsulthink-main">
			<div class="konsulthink-blog">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3">
							<? if ($lang == $setting->setting__system_language || $arr_section[0]->title_lang == ''): ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[0]->title; ?></h2>
							<? else: ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[0]->title_lang; ?></h2>
							<? endif; ?>
						</div>
					</div>
					<? if (count($arr_upcoming_events) > 0): ?>
						<div class="row">
							<div class="col-md-7 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
								<div class="blog-entry">
									<a href="<?= base_url(); ?>events/detail/<?= $arr_upcoming_events[0]->url_name; ?>" class="blog-img"><img src="<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_upcoming_events[0]->image_name; ?>" class="img-responsive"></a>
								</div>
							</div>
							<div class="col-md-5 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_upcoming_events[0]->about_lang == ''): ?>
										<span><small><?= $arr_upcoming_events[0]->date_display; ?> </small> | <small> <?= $arr_upcoming_events[0]->about; ?></small></span>
									<? else: ?>
										<span><small><?= $arr_upcoming_events[0]->date_display; ?> </small> | <small> <?= $arr_upcoming_events[0]->about_lang; ?></small></span>
									<? endif ?>

									<? if ($lang == $setting->setting__system_language || $arr_upcoming_events[0]->name_lang == ''): ?>
										<h3><a href="<?= base_url(); ?>events/detail/<?= $arr_upcoming_events[0]->url_name; ?>"><?= $arr_upcoming_events[0]->name; ?></a></h3>
									<? else: ?>
										<h3><a href="<?= base_url(); ?>events/detail/<?= $arr_upcoming_events[0]->url_name; ?>"><?= $arr_upcoming_events[0]->name_lang; ?></a></h3>
									<? endif ?>

									<? if ($lang == $setting->setting__system_language || $arr_upcoming_events[0]->subtitle_lang == ''): ?>
										<p><?= $arr_upcoming_events[0]->subtitle; ?></p>
									<? else: ?>
										<p><?= $arr_upcoming_events[0]->subtitle_lang; ?></p>
									<? endif ?>

									<? if ($lang == $setting->setting__system_language): ?>
										<a href="<?= base_url(); ?>events/detail/<?= $arr_upcoming_events[0]->url_name; ?>" class="lead">Read More <i class="icon-arrow-right3"></i></a>
									<? else: ?>
										<a href="<?= base_url(); ?>events/detail/<?= $arr_upcoming_events[0]->url_name; ?>" class="lead">Selengkapnya <i class="icon-arrow-right3"></i></a>
									<? endif; ?>
								</div>
							</div>
						</div>
					<? endif; ?>
					<? if (count($arr_upcoming_events) > 1): ?>
						<div class="row">
							<? foreach ($arr_upcoming_events as $key => $upcoming_events): ?>
								<? if ($key <= 0): ?>
									<? continue; ?>
								<? endif; ?>

								<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
									<div class="blog-entry">
										<a href="<?= base_url(); ?>events/detail/" class="blog-img"><img src="<?= $setting->setting__system_admin_url; ?>images/website/<?= $upcoming_events->image_name; ?>" class="img-responsive"></a>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $upcoming_events->about_lang == ''): ?>
												<span><small><?= $upcoming_events->date_display; ?> </small> | <small> <?= $upcoming_events->about; ?></small></span>
											<? else: ?>
												<span><small><?= $upcoming_events->date_display; ?> </small> | <small> <?= $upcoming_events->about_lang; ?></small></span>
											<? endif ?>

											<? if ($lang == $setting->setting__system_language || $upcoming_events->name_lang == ''): ?>
												<h3><a href="<?= base_url(); ?>events/detail/"><?= $upcoming_events->name; ?></a></h3>
											<? else: ?>
												<h3><a href="<?= base_url(); ?>events/detail/"><?= $upcoming_events->name_lang; ?></a></h3>
											<? endif ?>

											<? if ($lang == $setting->setting__system_language || $upcoming_events->subtitle_lang == ''): ?>
												<p><?= $upcoming_events->subtitle; ?></p>
											<? else: ?>
												<p><?= $upcoming_events->subtitle_lang; ?></p>
											<? endif ?>

											<? if ($lang == $setting->setting__system_language): ?>
												<a href="<?= base_url(); ?>events/detail/" class="lead">Read More <i class="icon-arrow-right3"></i></a>
											<? else: ?>
												<a href="<?= base_url(); ?>events/detail/" class="lead">Selengkapnya <i class="icon-arrow-right3"></i></a>
											<? endif; ?>
										</div>
									</div>
								</div>
							<? endforeach; ?>
						</div>
					<? endif; ?>
				</div>
			</div>

			<? if (count($arr_past_events) > 0): ?>
				<div id="past-events" class="konsulthink-blog">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6 col-md-offset-3 col-md-pull-3">
								<? if ($lang == $setting->setting__system_language || $arr_section[1]->title_lang == ''): ?>
									<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[1]->title; ?></h2>
								<? else: ?>
									<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[1]->title_lang; ?></h2>
								<? endif; ?>
							</div>
						</div>
						<div class="row">
							<? foreach ($arr_past_events as $key => $past_events): ?>
								<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
									<div class="blog-entry">
										<a href="<?= base_url(); ?>events/detail/" class="blog-img"><img src="<?= $setting->setting__system_admin_url; ?>images/website/<?= $past_events->image_name; ?>" class="img-responsive"></a>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $past_events->about_lang == ''): ?>
												<span><small><?= $past_events->date_display; ?> </small> | <small> <?= $past_events->about; ?></small></span>
											<? else: ?>
												<span><small><?= $past_events->date_display; ?> </small> | <small> <?= $past_events->about_lang; ?></small></span>
											<? endif ?>

											<? if ($lang == $setting->setting__system_language || $past_events->name_lang == ''): ?>
												<h3><a href="<?= base_url(); ?>events/detail/"><?= $past_events->name; ?></a></h3>
											<? else: ?>
												<h3><a href="<?= base_url(); ?>events/detail/"><?= $past_events->name_lang; ?></a></h3>
											<? endif ?>

											<? if ($lang == $setting->setting__system_language || $past_events->subtitle_lang == ''): ?>
												<p><?= $past_events->subtitle; ?></p>
											<? else: ?>
												<p><?= $past_events->subtitle_lang; ?></p>
											<? endif ?>

											<? if ($lang == $setting->setting__system_language): ?>
												<a href="<?= base_url(); ?>events/detail/" class="lead">Read More <i class="icon-arrow-right3"></i></a>
											<? else: ?>
												<a href="<?= base_url(); ?>events/detail/" class="lead">Selengkapnya <i class="icon-arrow-right3"></i></a>
											<? endif; ?>
										</div>
									</div>
								</div>
							<? endforeach; ?>
						</div>
					</div>
				</div>
			<? endif; ?>
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

