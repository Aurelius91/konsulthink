		<div id="konsulthink-main">
			<div class="konsulthink-contact">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<? if ($lang == $setting->setting__system_language): ?>
								<span class="heading-meta">Join Us Now</span>
							<? else: ?>
								<span class="heading-meta">Bergabunglah dengan kami Sekarang!</span>
							<? endif; ?>

							<? if ($lang == $setting->setting__system_language || $events->name_lang == ''): ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $events->name; ?></h2>
							<? else: ?>
								<h2 class="konsulthink-heading animate-box" data-animate-effect="fadeInLeft"><?= $events->name_lang; ?></h2>
							<? endif; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="konsulthink-feature konsulthink-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-xs-1 no-padding">
									<i style="font-size: 24px;" class="icon-map"></i>
								</div>
								<div class="col-xs-11">
									<span>
										<p><?= $events->location; ?></p>
										<p>Date: <?= $events->date_display; ?></p>
										<p>Time: <?= $events->time; ?></p>
									</span>
								</div>
							</div>

							<div class="konsulthink-feature konsulthink-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="col-xs-12 no-padding">
									<? if ($lang == $setting->setting__system_language || $events->subtitle_lang == ''): ?>
										<p><?= $events->subtitle; ?></p>
									<? else: ?>
										<p><?= $events->subtitle_lang; ?></p>
									<? endif; ?>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="row">
								<? if ($lang == $setting->setting__system_language): ?>
									<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>First Name <span class="register-error">* Required</span></label>
												<input id="first-name" type="text" class="form-control data-register-important" placeholder="Your First Name">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Last Name <span class="register-error">* Required</span></label>
												<input id="last-name" type="text" class="form-control data-register-important" placeholder="Your Last Name">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Birthday <span class="register-error">* Required</span></label>
												<input id="birthday" type="text" class="form-control data-register-important" placeholder="Your Birthday">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Email <span class="register-error">* Required</span></label>
												<input id="email" type="text" class="form-control data-register-important" placeholder="Your Email">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Occupation / Position <span class="register-error">* Required</span></label>
												<input id="position" type="text" class="form-control data-register-important" placeholder="Your Occupation / Position">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Corporate Name <span class="register-error">* Required</span></label>
												<input id="company" type="text" class="form-control data-register-important" placeholder="Your Position">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Have you attend similar training before? <span class="register-error">* Required</span></label>
												<select id="q1" class="form-control data-register-important">
													<option value="Yes">Yes</option>
													<option value="no">No</option>
												</select>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>If Yes, When?</label>
												<input id="q2" type="text" class="form-control" placeholder="When?">
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0">
											<div class="form-group">
												<label>Reason(s) for attending this training? <span class="register-error">* Required</span></label>
												<textarea id="q3" cols="30" rows="7" class="form-control data-register-important" placeholder="Reason(s)"></textarea>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Preferred date if we provide the Next Training? <span class="register-error">* Required</span></label>
												<input id="q4" type="text" class="form-control data-register-important" placeholder="Preferred date if we provide the Next Training?">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Preferred location for the next training? <span class="register-error">* Required</span></label>
												<input id="q5" type="text" class="form-control data-register-important" placeholder="Preferred location which you prefered for the next training">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Training option you preferred for the next training? <span class="register-error">* Required</span></label>
												<select id="q6" class="form-control data-register-important">
													<option value="Full Day">Full Day</option>
													<option value="Half Day">Half Day</option>
												</select>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Phone Number <span class="register-error">* Required</span></label>
												<input id="phone" type="text" class="form-control data-register-important" placeholder="Your Phone Number">
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0">
											<a href="<?= base_url(); ?>events/detail/<?= $events->url_name; ?>/"><button class="btn btn-primary btn-send-message">Back</button></a>
											<button id="btn-register-send-message" class="btn btn-primary btn-send-message" onclick="submitForm();">Send Message</button>
										</div>
									</div>
								<? else: ?>
									<div class="col-md-12  style="padding-left: 0"animate-box" data-animate-effect="fadeInLeft">
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Nama Depan <span class="register-error">* Required</span></label>
												<input id="first-name" type="text" class="form-control data-register-important" placeholder="Your First Name..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Nama Belakang <span class="register-error">* Required</span></label>
												<input id="last-name" type="text" class="form-control data-register-important" placeholder="Your Last Name..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Ulang Tahun <span class="register-error">* Required</span></label>
												<input id="birthday" type="text" class="form-control data-register-important" placeholder="Ulang Tahun Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Email <span class="register-error">* Required</span></label>
												<input id="email" type="text" class="form-control data-register-important" placeholder="Email Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Pekerjaan / Posisi <span class="register-error">* Required</span></label>
												<input id="position" type="text" class="form-control data-register-important" placeholder="Pekerjaan / Posisi Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Nama Perusahaan <span class="register-error">* Required</span></label>
												<input id="company" type="text" class="form-control data-register-important" placeholder="Nama Perusahaan..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Pernahkah kamu mengikuti pelatihan seperti ini? <span class="register-error">* Required</span></label>
												<select id="q1" class="form-control data-register-important">
													<option value="Yes">Ya</option>
													<option value="no">Tidak</option>
												</select>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Jika Ya, Kapan?</label>
												<input id="q2" type="text" class="form-control" placeholder="Jawaban Kamu..">
											</div>
										</div>
										<div class="col-md-12" style="padding-left: 0">
											<div class="form-group">
												<label>Alasan kamu mengikuti pelatihan ini? <span class="register-error">* Required</span></label>
												<textarea id="q3" cols="30" rows="7" class="form-control data-register-important" placeholder="Jawaban Kamu.."></textarea>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Tanggal yang kamu inginkan untuk pelatihan selanjutnya? <span class="register-error">* Required</span></label>
												<input id="q4" type="text" class="form-control data-register-important" placeholder="Jawaban Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Lokasi untuk pelatihan selanjutnya? <span class="register-error">* Required</span></label>
												<input id="q5" type="text" class="form-control data-register-important" placeholder="Jawaban Kamu..">
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Opsi Pelatihan Selanjutnya? <span class="register-error">* Required</span></label>
												<select id="q6" class="form-control data-register-important">
													<option value="Full Day">1 Hari</option>
													<option value="Half Day">Setengah Hari</option>
												</select>
											</div>
										</div>
										<div class="col-md-6" style="padding-left: 0">
											<div class="form-group">
												<label>Telepon <span class="register-error">* Required</span></label>
												<input id="phone" type="text" class="form-control data-register-important" placeholder="Telepon Kamu..">
											</div>
										</div>
										<div class="col-md-12">
											<a href="<?= base_url(); ?>events/detail/<?= $events->url_name; ?>/"><button class="btn btn-primary btn-send-message">Back</button></a>
											<button id="btn-register-send-message" class="btn btn-primary btn-send-message" onclick="submitForm();">Send Message</button>
										</div>
									</div>
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

	<script type="text/javascript">
		$(function() {
			resetForm();
		});

		var submitQuery = false;

		function isEmail(email) {
	        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	        return regex.test(email);
	    }

		function resetForm() {
			$('.data-register-important').val("");
			$('#q1').val('Yes');
			$('#q6').val('Full Day');
		}

		function submitForm() {
	    	if (submitQuery) {
	    		return;
	    	}

	    	submitQuery = true;

	    	$('#btn-register-send-message').html('Sending...');

        	$('.data-register-important').prev().children().html(' * Required').hide();
        	$('.data-register-important').css('border', '1px solid #d9d9d9');

        	var found = 0;
	        var firstName = $('#first-name').val();
	        var lastName = $('#last-name').val();
	        var birthday = $('#birthday').val();
	        var email = $('#email').val();
	        var position = $('#position').val();
	        var company = $('#company').val();
	        var q1 = $('#q1').val();
	        var q2 = $('#q2').val();
	        var q3 = $('#q3').val();
	        var q4 = $('#q4').val();
	        var q5 = $('#q5').val();
	        var q6 = $('#q6').val();
	        var phone = $('#phone').val();

	        $.each($('.data-register-important'), function(key, contact) {
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
	           	$('#btn-register-send-message').html('Send Message');
	           	submitQuery = false;

	            return;
	        }

	        $.ajax({
	            data :{
	            	events_id: "<?= $events->id; ?>",
	                name: firstName + ' ' + lastName,
	                birthday: birthday,
	                email: email,
	                position: position,
	                company: company,
	                question_1: q1,
	                question_2: q2,
	                question_3: q3,
	                question_4: q4,
	                question_5: q5,
	                question_6: q6,
	                phone: phone,
	                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
	            },
	            dataType: 'JSON',
	            error: function() {
	                alert('Server Error');
	                submitQuery = false;

	                $('#btn-register-send-message').html('Send Message');
	            },
	            success: function(data){
	                if (data.status == 'success') {
	                    alert('Registration Success. Our Team will contacting you soon. Please press ok to reload the pages.');
	                    window.location.reload();
	                }
	                else {
	                    alert(data.message);
	                }

	                submitQuery = false
	                $('#btn-register-send-message').html('Send Message');
	            },
	            type : 'POST',
	            url : '<?= base_url(); ?>events/ajax_register/',
	        });
	    }
	</script>

	</body>
</html>