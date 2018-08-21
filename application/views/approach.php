		<div id="konsulthink-main">
			<div class="konsulthink-about">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<div class="col-md-12" style="padding: 0;">
									<? if ($arr_section[0]->image_name == ''): ?>
										<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/ceo.jpg);"></div>
									<? else: ?>
										<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[0]->image_name; ?>);"></div>
									<? endif; ?>
								</div>
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="padding: 0;">
									<? if ($lang == $setting->setting__system_language || $arr_section[0]->subtitle_lang == ''): ?>
										<span class="heading-meta"><?= $arr_section[0]->subtitle; ?></span>
									<? else: ?>
										<span class="heading-meta"><?= $arr_section[0]->subtitle_lang; ?></span>
									<? endif; ?>

									<? if ($lang == $setting->setting__system_language || $arr_section[0]->title_lang == ''): ?>
										<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[0]->title; ?></h2>
									<? else: ?>
										<h2 class="konsulthink-heading" style="margin-bottom: 2em;"><?= $arr_section[0]->title_lang; ?></h2>
									<? endif; ?>
								</div>

								<div id="approach-about-us" class="col-md-12 animate-box" data-animate-effect="fadeInLeft" style="padding: 0;">
									<? if ($lang == $setting->setting__system_language || $arr_section[0]->description_lang == ''): ?>
										<?= $arr_section[0]->description; ?>
									<? else: ?>
										<?= $arr_section[0]->description_lang; ?>
									<? endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="konsulthink-services" style="padding-top: 0; padding-bottom: 0;">
				<div class="konsulthink-narrow-content">
					<div class="row">
						<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
							<? if ($lang == $setting->setting__system_language || $arr_section[1]->subtitle_lang == ''): ?>
								<span class="heading-meta"><?= $arr_section[1]->subtitle; ?></span>
							<? else: ?>
								<span class="heading-meta"><?= $arr_section[1]->subtitle_lang; ?></span>
							<? endif; ?>

							<? if ($lang == $setting->setting__system_language || $arr_section[1]->title_lang == ''): ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[1]->title; ?></h2>
							<? else: ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[1]->title_lang; ?></h2>
							<? endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-12">
									<div class="konsulthink-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="konsulthink-icon" style="padding: 10px;">
											<div class="" style="background: url(<?= base_url(); ?>assets/images/icon/qualitative.png); background-size: cover; height: 80px;"></div>
										</div>
										<div class="konsulthink-text">
											<? if ($lang == $setting->setting__system_language || $arr_section[2]->title_lang == ''): ?>
												<h3><?= $arr_section[2]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[2]->title_lang; ?></h3>
											<? endif; ?>

											<? if ($lang == $setting->setting__system_language || $arr_section[2]->description_lang == ''): ?>
												<?= $arr_section[2]->description; ?>
											<? else: ?>
												<?= $arr_section[2]->description_lang; ?>
											<? endif; ?>
										</div>
									</div>

									<div class="konsulthink-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="konsulthink-icon" style="padding: 10px;">
											<div class="" style="background: url(<?= base_url(); ?>assets/images/icon/team.png); background-size: cover; height: 80px;"></div>
										</div>
										<div class="konsulthink-text">
											<? if ($lang == $setting->setting__system_language || $arr_section[3]->title_lang == ''): ?>
												<h3><?= $arr_section[3]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[3]->title_lang; ?></h3>
											<? endif; ?>

											<? if ($lang == $setting->setting__system_language || $arr_section[3]->description_lang == ''): ?>
												<?= $arr_section[3]->description; ?>
											<? else: ?>
												<?= $arr_section[3]->description_lang; ?>
											<? endif; ?>
										</div>
									</div>

									<div class="konsulthink-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="konsulthink-icon" style="padding: 10px;">
											<div class="" style="background: url(<?= base_url(); ?>assets/images/icon/strategic.png); background-size: cover; height: 80px;"></div>
										</div>
										<div class="konsulthink-text">
											<? if ($lang == $setting->setting__system_language || $arr_section[4]->title_lang == ''): ?>
												<h3><?= $arr_section[4]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[4]->title_lang; ?></h3>
											<? endif; ?>

											<? if ($lang == $setting->setting__system_language || $arr_section[4]->description_lang == ''): ?>
												<?= $arr_section[4]->description; ?>
											<? else: ?>
												<?= $arr_section[4]->description_lang; ?>
											<? endif; ?>
										</div>
									</div>

									<div class="konsulthink-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="konsulthink-icon" style="padding: 10px;">
											<div class="" style="background: url(<?= base_url(); ?>assets/images/icon/think.png); background-size: cover; height: 80px;"></div>
										</div>
										<div class="konsulthink-text">
											<? if ($lang == $setting->setting__system_language || $arr_section[5]->title_lang == ''): ?>
												<h3><?= $arr_section[5]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[5]->title_lang; ?></h3>
											<? endif; ?>

											<? if ($lang == $setting->setting__system_language || $arr_section[5]->description_lang == ''): ?>
												<?= $arr_section[5]->description; ?>
											<? else: ?>
												<?= $arr_section[5]->description_lang; ?>
											<? endif; ?>
										</div>
									</div>

									<div class="konsulthink-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="konsulthink-icon" style="padding: 10px;">
											<div class="" style="background: url(<?= base_url(); ?>assets/images/icon/communication.png); background-size: cover; height: 80px;"></div>
										</div>
										<div class="konsulthink-text">
											<? if ($lang == $setting->setting__system_language || $arr_section[6]->title_lang == ''): ?>
												<h3><?= $arr_section[6]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[6]->title_lang; ?></h3>
											<? endif; ?>

											<? if ($lang == $setting->setting__system_language || $arr_section[6]->description_lang == ''): ?>
												<?= $arr_section[6]->description; ?>
											<? else: ?>
												<?= $arr_section[6]->description_lang; ?>
											<? endif; ?>
										</div>
									</div>

									<div class="konsulthink-feature animate-box" data-animate-effect="fadeInLeft">
										<div class="konsulthink-icon" style="padding: 10px;">
											<div class="" style="background: url(<?= base_url(); ?>assets/images/icon/cost.png); background-size: cover; height: 80px;"></div>
										</div>
										<div class="konsulthink-text">
											<? if ($lang == $setting->setting__system_language || $arr_section[7]->title_lang == ''): ?>
												<h3><?= $arr_section[7]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[7]->title_lang; ?></h3>
											<? endif; ?>

											<? if ($lang == $setting->setting__system_language || $arr_section[7]->description_lang == ''): ?>
												<?= $arr_section[7]->description; ?>
											<? else: ?>
												<?= $arr_section[7]->description_lang; ?>
											<? endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<? if ($arr_section[2]->image_name == ''): ?>
											<div class="services-img" style="background-image: url(<?= base_url(); ?>assets/images/assessment.jpg)"></div>
										<? else: ?>
											<div class="services-img" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[2]->image_name; ?>)"></div>
										<? endif; ?>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $arr_section[2]->title_lang == ''): ?>
												<h3><?= $arr_section[2]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[2]->title_lang; ?></h3>
											<? endif; ?>
										</div>
									</div>
									<div class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<? if ($arr_section[4]->image_name == ''): ?>
											<div class="services-img" style="background-image: url(<?= base_url(); ?>assets/images/strategy.jpg)"></div>
										<? else: ?>
											<div class="services-img" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[4]->image_name; ?>)"></div>
										<? endif; ?>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $arr_section[4]->title_lang == ''): ?>
												<h3><?= $arr_section[4]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[4]->title_lang; ?></h3>
											<? endif; ?>
										</div>
									</div>
									<div class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<? if ($arr_section[6]->image_name == ''): ?>
											<div class="services-img" style="background-image: url(<?= base_url(); ?>assets/images/collaboration.jpg)"></div>
										<? else: ?>
											<div class="services-img" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[6]->image_name; ?>)"></div>
										<? endif; ?>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $arr_section[6]->title_lang == ''): ?>
												<h3><?= $arr_section[6]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[6]->title_lang; ?></h3>
											<? endif; ?>
										</div>
									</div>
								</div>
								<div class="col-md-6 move-bottom">
									<div class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<? if ($arr_section[3]->image_name == ''): ?>
											<div class="services-img" style="background-image: url(<?= base_url(); ?>assets/images/team.jpg)"></div>
										<? else: ?>
											<div class="services-img" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[3]->image_name; ?>)"></div>
										<? endif; ?>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $arr_section[3]->title_lang == ''): ?>
												<h3><?= $arr_section[3]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[3]->title_lang; ?></h3>
											<? endif; ?>
										</div>
									</div>
									<div class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<? if ($arr_section[5]->image_name == ''): ?>
											<div class="services-img" style="background-image: url(<?= base_url(); ?>assets/images/think.jpg)"></div>
										<? else: ?>
											<div class="services-img" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[5]->image_name; ?>)"></div>
										<? endif; ?>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $arr_section[5]->title_lang == ''): ?>
												<h3><?= $arr_section[5]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[5]->title_lang; ?></h3>
											<? endif; ?>
										</div>
									</div>
									<div class="services-wrap animate-box" data-animate-effect="fadeInRight">
										<? if ($arr_section[7]->image_name == ''): ?>
											<div class="services-img" style="background-image: url(<?= base_url(); ?>assets/images/cost.jpg)"></div>
										<? else: ?>
											<div class="services-img" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[7]->image_name; ?>)"></div>
										<? endif; ?>

										<div class="desc">
											<? if ($lang == $setting->setting__system_language || $arr_section[7]->title_lang == ''): ?>
												<h3><?= $arr_section[7]->title; ?></h3>
											<? else: ?>
												<h3><?= $arr_section[7]->title_lang; ?></h3>
											<? endif; ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="konsulthink-about" style="padding-top: 0; padding-bottom: 0;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<? if ($arr_section[0]->image_name == ''): ?>
								<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/konsulthink-mock.jpeg); width: 100%;"></div>
							<? else: ?>
								<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[0]->image_name; ?>); width: 100%;"></div>
							<? endif; ?>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<? if ($lang == $setting->setting__system_language || $arr_section[8]->subtitle_lang == ''): ?>
									<span class="heading-meta"><?= $arr_section[8]->subtitle; ?></span>
								<? else: ?>
									<span class="heading-meta"><?= $arr_section[8]->subtitle_lang; ?></span>
								<? endif; ?>

								<? if ($lang == $setting->setting__system_language || $arr_section[8]->title_lang == ''): ?>
									<h2 class="konsulthink-heading"><?= $arr_section[8]->title; ?></h2>
								<? else: ?>
									<h2 class="konsulthink-heading"><?= $arr_section[8]->title_lang; ?></h2>
								<? endif; ?>
							</div>
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									            <? if ($lang == $setting->setting__system_language || $arr_section[9]->title_lang == ''): ?>
													<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?= $arr_section[9]->title; ?></a>
												<? else: ?>
													<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?= $arr_section[9]->title_lang; ?></a>
												<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<? if ($lang == $setting->setting__system_language || $arr_section[9]->description_lang == ''): ?>
													<?= $arr_section[9]->description; ?>
												<? else: ?>
													<?= $arr_section[9]->description_lang; ?>
												<? endif; ?>
											</div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <? if ($lang == $setting->setting__system_language || $arr_section[10]->title_lang == ''): ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><?= $arr_section[10]->title; ?></a>
												<? else: ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><?= $arr_section[10]->title_lang; ?></a>
												<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
												<? if ($lang == $setting->setting__system_language || $arr_section[10]->description_lang == ''): ?>
													<?= $arr_section[10]->description; ?>
												<? else: ?>
													<?= $arr_section[10]->description_lang; ?>
												<? endif; ?>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingThree">
									        <h4 class="panel-title">
									            <? if ($lang == $setting->setting__system_language || $arr_section[11]->title_lang == ''): ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><?= $arr_section[11]->title; ?></a>
												<? else: ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><?= $arr_section[11]->title_lang; ?></a>
												<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
									        <div class="panel-body">
									            <? if ($lang == $setting->setting__system_language || $arr_section[11]->description_lang == ''): ?>
													<?= $arr_section[11]->description; ?>
												<? else: ?>
													<?= $arr_section[11]->description_lang; ?>
												<? endif; ?>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFour">
									        <h4 class="panel-title">
									            <? if ($lang == $setting->setting__system_language || $arr_section[12]->title_lang == ''): ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><?= $arr_section[12]->title; ?></a>
												<? else: ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><?= $arr_section[12]->title_lang; ?></a>
												<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
									        <div class="panel-body">
									            <? if ($lang == $setting->setting__system_language || $arr_section[12]->description_lang == ''): ?>
													<?= $arr_section[12]->description; ?>
												<? else: ?>
													<?= $arr_section[12]->description_lang; ?>
												<? endif; ?>
									        </div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingFive">
									        <h4 class="panel-title">
									            <? if ($lang == $setting->setting__system_language || $arr_section[13]->title_lang == ''): ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><?= $arr_section[13]->title; ?></a>
												<? else: ?>
													<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive"><?= $arr_section[13]->title_lang; ?></a>
												<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
									        <div class="panel-body">
									           	<? if ($lang == $setting->setting__system_language || $arr_section[13]->description_lang == ''): ?>
													<?= $arr_section[13]->description; ?>
												<? else: ?>
													<?= $arr_section[13]->description_lang; ?>
												<? endif; ?>
									        </div>
									    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hidden-xs rectangle-1" data-0="top: 100%; right: 5%" data-3000="top: 120%"></div>
	<div class="hidden-xs rectangle-2" data-0="top: 90%; right: 11%" data-3000="top: 135%"></div>

	<div class="hidden-xs rectangle-1" data-0="top: 120%; left: 25%" data-3000="top: 155%"></div>

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

