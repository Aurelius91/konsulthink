		<div id="konsulthink-main">
			<aside id="konsulthink-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
						<? if (count($arr_slideshow) > 0): ?>
							<? foreach ($arr_slideshow as $slideshow): ?>
							   	<li style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $slideshow->image_name; ?>);">
							   		<div class="overlay"></div>
							   		<div class="container-fluid">
							   			<div class="row">
								   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
								   				<div class="slider-text-inner hidden-xs">
								   					<div class="desc" style="opacity: 0.7; border-radius: 5px;">
								   						<? if ($lang == $setting->setting__system_language || $slideshow->name_lang == ''): ?>
									   						<h1><?= $slideshow->name; ?></h1>
									   					<? else: ?>
									   						<h1><?= $slideshow->name_lang; ?></h1>
									   					<? endif; ?>

									   					<? if ($lang == $setting->setting__system_language || $slideshow->description_lang == ''): ?>
									   						<?= $slideshow->description; ?>
									   					<? else: ?>
									   						<?= $slideshow->description_lang; ?>
									   					<? endif; ?>
													</div>
								   				</div>
								   			</div>
								   		</div>
							   		</div>
							   	</li>
						   	<? endforeach; ?>
					   	<? else: ?>
					   		<li style="background-image: url(<?= base_url(); ?>assets/images/slide-1.jpg);">
						   		<div class="overlay"></div>
						   		<div class="container-fluid">
						   			<div class="row">
							   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
							   				<div class="slider-text-inner hidden-xs">
							   					<div class="desc" style="opacity: 0.7; border-radius: 5px;">
								   					<h1>Delivering Your Vision</h1>
								   					<h2>A collaborative consulting which was established and run by a team of Millennials who have a high curiosity, where we aim to give our partners a solution to advance their organizations' competitiveness.</h2>
												</div>
							   				</div>
							   			</div>
							   		</div>
						   		</div>
						   	</li>
						   	<li style="background-image: url(<?= base_url(); ?>assets/images/slide-2.jpg);">
						   		<div class="overlay"></div>
						   		<div class="container-fluid">
						   			<div class="row">
							   			<div class="col-md-8 col-md-offset-2 col-md-pull-2 js-fullheight slider-text">
							   				<div class="slider-text-inner hidden-xs">
							   					<div class="desc" style="opacity: 0.7; border-radius: 5px;">
								   					<h1>Delivering Your Vision</h1>
								   					<h2>A collaborative consulting which was established and run by a team of Millennials who have a high curiosity, where we aim to give our partners a solution to advance their organizations' competitiveness.</h2>
												</div>
							   				</div>
							   			</div>
							   		</div>
						   		</div>
						   	</li>
					   	<? endif; ?>
				  	</ul>
			  	</div>
			</aside>

			<div class="konsulthink-about" style="padding-top: 0; padding-bottom: 0;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
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

								<? if ($lang == $setting->setting__system_language || $arr_section[0]->description_lang == ''): ?>
									<?= $arr_section[0]->description; ?>
								<? else: ?>
									<?= $arr_section[0]->description_lang; ?>
								<? endif; ?>
							</div>
						</div>
						<div class="col-md-6">
							<? if ($arr_section[0]->image_name == ''): ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/cindy.jpg);"></div>
							<? else: ?>
								<div class="about-img about-img-additional animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[0]->image_name; ?>);"></div>
							<? endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="konsulthink-about" style="position: relative; padding: 1em 50px width: 100%; margin: 4em auto;">
				<div style="position: absolute; top: 0; left: 15px; width: 50px; height: 50px; border-top: 8px solid #0DB6AD; border-left: 8px solid #0DB6AD;"></div>
				<div style="position: absolute; bottom: 0; right: 15px; width: 50px; height: 50px; border-bottom: 8px solid #0DB6AD; border-right: 8px solid #0DB6AD;"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12" style="padding-top: 100px; padding: 100px 100px 0">
							<? if ($lang == $setting->setting__system_language || $arr_section[1]->subtitle_lang == ''): ?>
								<div style="text-align: center; font-size: 28px;"><?= $arr_section[1]->subtitle; ?>"</div>
							<? else: ?>
								<div style="text-align: center; font-size: 28px;"><?= $arr_section[1]->subtitle_lang; ?>"</div>
							<? endif; ?>

							<? if ($lang == $setting->setting__system_language || $arr_section[1]->title_lang == ''): ?>
								<div style="text-align: center;"><?= $arr_section[1]->title; ?></div>
							<? else: ?>
								<div style="text-align: center;"><?= $arr_section[1]->title_lang; ?></div>
							<? endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="konsulthink-about">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(<?= base_url(); ?>assets/images/slide-1.jpg);">
								<? if ($arr_section[2]->image_name == ''): ?>
									<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(<?= base_url(); ?>assets/images/deliver.jpg);"></div>
								<? else: ?>
									<div class="about-img-2 animate-box" data-animate-effect="fadeInRight" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[2]->image_name; ?>);"></div>
								<? endif; ?>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
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
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingOne">
									        <h4 class="panel-title">
									        	<? if ($lang == $setting->setting__system_language || $arr_section[3]->title_lang == ''): ?>
									        		<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?= $arr_section[3]->title; ?></a>
								        		<? else: ?>
								        			<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?= $arr_section[3]->title_lang; ?></a>
								        		<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<? if ($lang == $setting->setting__system_language || $arr_section[3]->description_lang == ''): ?>
													<?= $arr_section[3]->description; ?>
												<? else: ?>
													<?= $arr_section[3]->description_lang; ?>
												<? endif; ?>
											</div>
									    </div>
									</div>
									<div class="panel panel-default">
									    <div class="panel-heading" role="tab" id="headingTwo">
									        <h4 class="panel-title">
									            <? if ($lang == $setting->setting__system_language || $arr_section[4]->title_lang == ''): ?>
									        		<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><?= $arr_section[4]->title; ?></a>
								        		<? else: ?>
								        			<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><?= $arr_section[4]->title_lang; ?></a>
								        		<? endif; ?>
									        </h4>
									    </div>
									    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
									        <div class="panel-body">
												<? if ($lang == $setting->setting__system_language || $arr_section[4]->description_lang == ''): ?>
													<?= $arr_section[4]->description; ?>
												<? else: ?>
													<?= $arr_section[4]->description_lang; ?>
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

			<div id="konsulthink-counter" class="konsulthink-counters" style="background-image: url(<?= base_url(); ?>assets/images/slide-1.jpg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="konsulthink-narrow-content">
					<div class="row">
						<? if ($lang == $setting->setting__system_language || $arr_section[5]->title_lang == ''): ?>
							<h2 style="color: rgba(255, 255, 255, 7); text-align: center; padding-top: 20px; position: relative; z-index: 100;"><strong><?= $arr_section[5]->title; ?></strong></h2>
						<? else: ?>
							<h2 style="color: rgba(255, 255, 255, 7); text-align: center; padding-top: 20px; position: relative; z-index: 100;"><strong><?= $arr_section[5]->title_lang; ?></strong></h2>
						<? endif; ?>
					</div>
					<div class="row">
						<div class="col-md-1 hidden-xs text-center animate-box"></div>
						<div class="col-md-2 col-xs-12 text-center animate-box">
							<span class="icon" style="background-color: white; border-radius: 50%;">
								<img style="padding: 25px; width: 100%;" src="<?= base_url(); ?>assets/images/icon/t.png" />
							</span>

							<? if ($lang == $setting->setting__system_language || $arr_section[6]->title_lang == ''): ?>
								<span class="konsulthink-counter-label"><?= $arr_section[6]->title; ?></span>
							<? else: ?>
								<span class="konsulthink-counter-label"><?= $arr_section[6]->title_lang; ?></span>
							<? endif; ?>
						</div>
						<div class="col-md-2 col-xs-12 text-center animate-box">
							<span class="icon" style="background-color: white; border-radius: 50%;">
								<img style="padding: 25px; width: 100%;" src="<?= base_url(); ?>assets/images/icon/h.png" />
							</span>

							<? if ($lang == $setting->setting__system_language || $arr_section[7]->title_lang == ''): ?>
								<span class="konsulthink-counter-label"><?= $arr_section[7]->title; ?></span>
							<? else: ?>
								<span class="konsulthink-counter-label"><?= $arr_section[7]->title_lang; ?></span>
							<? endif; ?>
						</div>
						<div class="col-md-2 col-xs-12 text-center animate-box">
							<span class="icon" style="background-color: white; border-radius: 50%;">
								<img style="padding: 25px; width: 100%;" src="<?= base_url(); ?>assets/images/icon/i.png" />
							</span>

							<? if ($lang == $setting->setting__system_language || $arr_section[8]->title_lang == ''): ?>
								<span class="konsulthink-counter-label"><?= $arr_section[8]->title; ?></span>
							<? else: ?>
								<span class="konsulthink-counter-label"><?= $arr_section[8]->title_lang; ?></span>
							<? endif; ?>
						</div>
						<div class="col-md-2 col-xs-12 text-center animate-box">
							<span class="icon" style="background-color: white; border-radius: 50%;">
								<img style="padding: 25px; width: 100%;" src="<?= base_url(); ?>assets/images/icon/n.png" />
							</span>

							<? if ($lang == $setting->setting__system_language || $arr_section[9]->title_lang == ''): ?>
								<span class="konsulthink-counter-label"><?= $arr_section[9]->title; ?></span>
							<? else: ?>
								<span class="konsulthink-counter-label"><?= $arr_section[9]->title_lang; ?></span>
							<? endif; ?>
						</div>
						<div class="col-md-2 col-xs-12 text-center animate-box">
							<span class="icon" style="background-color: white; border-radius: 50%;">
								<img style="padding: 25px; width: 100%;" src="<?= base_url(); ?>assets/images/icon/k.png" />
							</span>

							<? if ($lang == $setting->setting__system_language || $arr_section[10]->title_lang == ''): ?>
								<span class="konsulthink-counter-label"><?= $arr_section[10]->title; ?></span>
							<? else: ?>
								<span class="konsulthink-counter-label"><?= $arr_section[10]->title_lang; ?></span>
							<? endif; ?>
						</div>
						<div class="col-md-1 text-center animate-box"></div>
					</div>
				</div>
			</div>

			<div class="konsulthink-services" style="padding-top: 0;">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<? if ($lang == $setting->setting__system_language || $arr_section[11]->subtitle_lang == ''): ?>
								<span class="heading-meta"><?= $arr_section[11]->subtitle; ?></span>
							<? else: ?>
								<span class="heading-meta"><?= $arr_section[11]->subtitle_lang; ?></span>
							<? endif; ?>

							<? if ($lang == $setting->setting__system_language || $arr_section[11]->title_lang == ''): ?>
								<h2 class="konsulthink-heading"><?= $arr_section[11]->title; ?></h2>
							<? else: ?>
								<h2 class="konsulthink-heading"><?= $arr_section[11]->title_lang; ?></h2>
							<? endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<? if ($arr_section[12]->image_name == ''): ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= base_url(); ?>assets/images/data-scientist.jpg)"></div>
								<? else: ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[12]->image_name; ?>)"></div>
								<? endif; ?>

								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_section[12]->title_lang == ''): ?>
										<h3><?= $arr_section[12]->title; ?></h3>
									<? else: ?>
										<h3><?= $arr_section[12]->title_lang; ?></h3>
									<? endif; ?>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<? if ($arr_section[13]->image_name == ''): ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= base_url(); ?>assets/images/human-capital.jpg)"></div>
								<? else: ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[13]->image_name; ?>)"></div>
								<? endif; ?>

								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_section[13]->title_lang == ''): ?>
										<h3><?= $arr_section[13]->title; ?></h3>
									<? else: ?>
										<h3><?= $arr_section[13]->title_lang; ?></h3>
									<? endif; ?>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<? if ($arr_section[14]->image_name == ''): ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= base_url(); ?>assets/images/change.jpg)"></div>
								<? else: ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[14]->image_name; ?>)"></div>
								<? endif; ?>

								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_section[14]->title_lang == ''): ?>
										<h3><?= $arr_section[14]->title; ?></h3>
									<? else: ?>
										<h3><?= $arr_section[14]->title_lang; ?></h3>
									<? endif; ?>
								</div>
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<? if ($arr_section[15]->image_name == ''): ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= base_url(); ?>assets/images/operation-excellence.jpg)"></div>
								<? else: ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[15]->image_name; ?>)"></div>
								<? endif; ?>

								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_section[15]->title_lang == ''): ?>
										<h3><?= $arr_section[15]->title; ?></h3>
									<? else: ?>
										<h3><?= $arr_section[15]->title_lang; ?></h3>
									<? endif; ?>
								</div>
							</a>
						</div>
						<div class="col-md-4">
							<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<? if ($arr_section[16]->image_name == ''): ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= base_url(); ?>assets/images/csr.jpg)"></div>
								<? else: ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[16]->image_name; ?>)"></div>
								<? endif; ?>

								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_section[16]->title_lang == ''): ?>
										<h3><?= $arr_section[16]->title; ?></h3>
									<? else: ?>
										<h3><?= $arr_section[16]->title_lang; ?></h3>
									<? endif; ?>
								</div>
							</a>
						</div>

						<div class="col-md-4">
							<a class="services-wrap animate-box" data-animate-effect="fadeInRight">
								<? if ($arr_section[17]->image_name == ''): ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= base_url(); ?>assets/images/startup.jpg)"></div>
								<? else: ?>
									<div class="services-img img-hover-zoom" style="background-image: url(<?= $setting->setting__system_admin_url; ?>images/website/<?= $arr_section[17]->image_name; ?>)"></div>
								<? endif; ?>

								<div class="desc">
									<? if ($lang == $setting->setting__system_language || $arr_section[17]->title_lang == ''): ?>
										<h3><?= $arr_section[17]->title; ?></h3>
									<? else: ?>
										<h3><?= $arr_section[17]->title_lang; ?></h3>
									<? endif; ?>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="hidden-xs rectangle-1" data-0="top: 100%; left: 70%;" data-3000="top: 150%"></div>

	<div class="hidden-xs rectangle-1" data-0="top: 220%; left: 25%" data-3000="top: 255%"></div>

	<div class="hidden-xs rectangle-1" data-0="top: 200%; right: 5%" data-3000="top: 220%"></div>
	<div class="hidden-xs rectangle-2" data-0="top: 180%; right: 11%" data-3000="top: 235%"></div>

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

