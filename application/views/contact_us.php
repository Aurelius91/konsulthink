		<div id="konsulthink-main">
			<div class="konsulthink-contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<? if ($lang == $setting->setting__system_language || $arr_section[0]->subtitle_lang == ''): ?>
								<span class="heading-meta"><?= $arr_section[0]->subtitle; ?></span>
							<? else: ?>
								<span class="heading-meta"><?= $arr_section[0]->subtitle_lang; ?></span>
							<? endif; ?>

							<? if ($lang == $setting->setting__system_language || $arr_section[0]->title_lang == ''): ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[0]->title; ?></h2>
							<? else: ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $arr_section[0]->title_lang; ?></h2>
							<? endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<? if ($lang == $setting->setting__system_language): ?>
										<div class="col-md-6" style="padding-left: 0;">
											<div class="form-group">
												<label>Name <span class="cu-error">* Required</span></label>
												<input id="name" type="text" class="form-control data-cu-important" placeholder="Your Name..">
											</div>
										</div>
										<div class="col-md-6"  style="padding-left: 0;">
											<div class="form-group">
												<label>Subject <span class="cu-error">* Required</span></label>
												<input id="subject" type="text" class="form-control data-cu-important" placeholder="Your Subject..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0;">
											<div class="form-group">
												<label>Email <span class="cu-error">* Required</span></label>
												<input id="email" type="text" class="form-control data-cu-important" placeholder="Your Email..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0;">
											<div class="form-group">
												<label>Phone <span class="cu-error">* Required</span></label>
												<input id="phone" type="text" class="form-control data-cu-important" placeholder="Your Phone..">
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0;">
											<div class="form-group">
												<label>Message <span class="cu-error">* Required</span></label>
												<textarea id="message" cols="30" rows="7" class="form-control data-cu-important" placeholder="Your Message.."></textarea>
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0;">
											<div class="form-group">
												<button id="btn-cu-send-message" class="btn btn-primary btn-send-message" onclick="submitForm();">Send Message</button>
											</div>
										</div>
									<? else: ?>
										<div class="col-md-6" style="padding-left: 0;">
											<div class="form-group">
												<label>Nama <span class="cu-error">* Penting</span></label>
												<input id="name" type="text" class="form-control data-cu-important" placeholder="Nama Kamu..">
											</div>
										</div>
										<div class="col-md-6"  style="padding-left: 0;">
											<div class="form-group">
												<label>Subyek <span class="cu-error">* Penting</span></label>
												<input id="subject" type="text" class="form-control data-cu-important" placeholder="Subyek Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0;">
											<div class="form-group">
												<label>Email <span class="cu-error">* Penting</span></label>
												<input id="email" type="text" class="form-control data-cu-important" placeholder="Email Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0;">
											<div class="form-group">
												<label>Telepon <span class="cu-error">* Penting</span></label>
												<input id="phone" type="text" class="form-control data-cu-important" placeholder="Telepon Kamu..">
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0;">
											<div class="form-group">
												<label>Pesan <span class="cu-error">* Penting</span></label>
												<textarea id="message" cols="30" rows="7" class="form-control data-cu-important" placeholder="Pesan Kamu.."></textarea>
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0;">
											<div class="form-group">
												<button id="btn-cu-send-message" class="btn btn-primary btn-send-message" onclick="submitForm();">Kirim Pesan</button>
											</div>
										</div>
									<? endif; ?>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<? if ($setting->company_email != ''): ?>
								<div class="konsulthink-feature konsulthink-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="col-xs-1 no-padding">
										<i style="font-size: 24px;" class="icon-mail"></i>
									</div>
									<div class="col-xs-1 no-padding1">
										<span><p><a href="mailto:<?= $setting->company_email; ?>"><?= $setting->company_email; ?></a></p></span>
									</div>
								</div>
							<? endif; ?>

							<? if ($setting->company_address != ''): ?>
								<div class="konsulthink-feature konsulthink-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="col-xs-1 no-padding">
										<i style="font-size: 24px;" class="icon-map"></i>
									</div>
									<div class="col-xs-11 no-padding1">
										<span><?= $setting->company_address; ?></span>
									</div>
								</div>
							<? endif; ?>

							<? if ($setting->company_phone != '' || $setting->company_phone2 != ''): ?>
								<div class="konsulthink-feature konsulthink-feature-sm animate-box" data-animate-effect="fadeInLeft">
									<div class="col-xs-1 no-padding">
										<i style="font-size: 24px;" class="icon-phone"></i>
									</div>
									<div class="col-xs-11 no-padding1">
										<span>
											<p>
												<? if ($setting->company_phone != ''): ?>
													<a href="tel://<?= $setting->company_phone; ?>"><?= $setting->company_phone; ?></a>
												<? endif; ?>
												<br>
												<? if ($setting->company_phone2 != ''): ?>
													<a href="tel://<?= $setting->company_phone2; ?>"><?= $setting->company_phone2; ?></a>
												<? endif; ?>
											</p>
										</span>
									</div>
								</div>
							<? endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div id="map"></div>
		</div>
	</div>

	<script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.waypoints.min.js"></script>
	<script src="<?= base_url(); ?>assets/js/jquery.flexslider-min.js"></script>
	<script src="<?= base_url(); ?>assets/js/sticky-kit.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7TOKcY-1zYKOvhSDI6bw5Yu9NtHvHmtY&callback=initMap"></script>
	<script src="<?= base_url(); ?>assets/js/main.js"></script>

	<? $this->load->view('js'); ?>

	<script type="text/javascript">
		$(function() {
			initMap();
			resetForm();
		});

		var submitQuery = false;

		function initMap() {
	        var myLatLng1 = {
	            lat: <?= $setting->setting__website_map_latitude; ?>,
	            lng: <?= $setting->setting__website_map_longitude; ?>
	        };

	        var map = new google.maps.Map(document.getElementById('map'), {
	            zoom: 16,
	            scaleControl: false,
	            scrollwheel: false,
	            disableDoubleClickZoom: true,
	            center: myLatLng1,
	            styles: [
		            {
		            	elementType: 'geometry',
		            	stylers: [
		            		{
		            			color: '#242f3e'
		            		}

		            	]
		           	},
		            {
		            	elementType: 'labels.text.stroke',
		            	stylers: [
		            		{
		            			color: '#242f3e'
		            		}
		            	]
		            },
		            {
		            	elementType: 'labels.text.fill',
		            	stylers: [
		            		{
		            			color: '#746855'
		            		}
		            	]
		            },
		            {
		              	featureType: 'administrative.locality',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#d59563'
		              		}
		              	]
		            },
		            {
		              	featureType: 'poi',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#d59563'
		              		}
		              	]
		            },
		            {
			            featureType: 'poi.park',
			            elementType: 'geometry',
			            stylers: [
			              	{
			              		color: '#263c3f'
			              	}
			            ]
		            },
		            {
		              	featureType: 'poi.park',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#6b9a76'
		              		}
		              	]
		            },
		            {
						featureType: 'road',
						elementType: 'geometry',
						stylers: [
							{
								color: '#38414e'
							}
						]
		            },
		            {
		              	featureType: 'road',
		              	elementType: 'geometry.stroke',
		              	stylers: [
		              		{
		              			color: '#212a37'
		              		}
		              	]
		            },
		            {
		              	featureType: 'road',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#9ca5b3'
		              		}
		              	]
		            },
		            {
		              	featureType: 'road.highway',
		              	elementType: 'geometry',
		              	stylers: [
		              		{
		              			color: '#746855'
		              		}
		              	]
		            },
		            {
		              	featureType: 'road.highway',
		              	elementType: 'geometry.stroke',
		              	stylers: [
		              		{
		              			color: '#1f2835'
		              		}
		              	]
		            },
		            {
		              	featureType: 'road.highway',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#f3d19c'
		              		}
		              	]
		            },
		            {
		              	featureType: 'transit',
		             	elementType: 'geometry',
		              	stylers: [
		              		{
		              			color: '#2f3948'
		              		}
		              	]
		            },
		            {
		              	featureType: 'transit.station',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#d59563'
		              		}
		              	]
		            },
		            {
		              	featureType: 'water',
		              	elementType: 'geometry',
		              	stylers: [
		              		{
		              			color: '#17263c'
		              		}
		              	]
		            },
		            {
		              	featureType: 'water',
		              	elementType: 'labels.text.fill',
		              	stylers: [
		              		{
		              			color: '#515c6d'
		              		}
		              	]
		            },
		            {
		              	featureType: 'water',
		              	elementType: 'labels.text.stroke',
		              	stylers: [
		              		{
		              			color: '#17263c'
		              		}
		              	]
		            }
		          ]

	        });

	        var marker1 = new google.maps.Marker({
	            position: myLatLng1,
	            map: map,
	            icon: '<?= base_url(); ?>assets/images/loc.png',
	        });
	    }

	    function isEmail(email) {
	        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	        return regex.test(email);
	    }

	    function resetForm() {
	    	$('.data-cu-important').val("");
	    }

	    function submitForm() {
	    	if (submitQuery) {
	    		return;
	    	}

	    	submitQuery = true;

	    	$('#btn-cu-send-message').html('Sending...');

        	$('.data-cu-important').prev().children().html(' * Required').hide();
        	$('.data-cu-important').css('border', '1px solid #d9d9d9');

        	var found = 0;
	        var name = $('#name').val();
	        var phone = $('#phone').val();
	        var email = $('#email').val();
	        var subject = $('#subject').val();
	        var message = $('#message').val();

	        $.each($('.data-cu-important'), function(key, contact) {
	            if ($(contact).val() == '' || $(contact).val() == 0) {
	                found += 1;

	                $(contact).prev().children().html(' * Required').show();
	                $(contact).css('border', '1px solid red');
	            }
	        });

	        if (email != '' && !isEmail(email)) {
				found += 1;

				$('#email').prev().children().html(' * Wrong Email or Password').show();
				$('#email').css('border', '1px solid red');
			}

	        if (found > 0) {
	           	$('#btn-cu-send-message').html('Send Message');
	           	submitQuery = false;

	            return;
	        }

	        $.ajax({
	            data :{
	                name: name,
	                phone: phone,
	                email: email,
	                subject: subject,
	                message: message,
	                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
	            },
	            dataType: 'JSON',
	            error: function() {
	                alert('Server Error');
	                submitQuery = false;

	                $('#btn-cu-send-message').html('Send Message');
	            },
	            success: function(data){
	                if (data.status == 'success') {
	                    alert('Email Sent. Please press ok to reload the pages.');
	                    window.location.reload();
	                }
	                else {
	                    alert(data.message);
	                }

	                submitQuery = false
	                $('#btn-cu-send-message').html('Send Message');
	            },
	            type : 'POST',
	            url : '<?= base_url(); ?>contact_us/ajax_send_message/',
	        });
	    }
	</script>

	</body>
</html>