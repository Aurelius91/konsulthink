	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			click();
			init();
			reset();
			change();
		});

		function back() {
			window.location.href = '<?= base_url(); ?>events/view/1/';
		}

		function change() {
			$('#main-image').change(function() {
				var file_data = $('#main-image').prop('files')[0];
				var form_data = new FormData();
				form_data.append('file', file_data);
				form_data.append("<?= $csrf['name'] ?>", "<?= $csrf['hash'] ?>");

				$.ajax({
					cache: false,
					contentType: false,
					data: form_data,
					dataType: 'JSON',
					error: function() {
						alert('Server Error.');
					},
					processData: false,
					type: 'post',
					success: function(data) {
						if (data.status == 'success') {
							$('.preview').remove();

							var image = '<img class="preview" style="width: 100%;" src="<?= base_url(); ?>images/website/'+ data.image_id +'.'+ data.ext +'">';
							$('#preview').append(image);
                            $('#preview').data('image_id', data.image_id);
						}
						else {
							alert(data.message);
						}
					},
					url: '<?= base_url(); ?>image/ajax_upload_all/',
					xhr: function() {
						var percentage = 0;
						var xhr = new window.XMLHttpRequest();

						xhr.upload.addEventListener('progress', function(evt) {
							$('.ui.text.loader').html('Checking Data..');
						}, false);

						xhr.addEventListener('progress', function(evt) {
							$('.ui.text.loader').html('Updating Database...');
						}, false);

						return xhr;
					}
				});
			});
		}

		function click() {
			$('#form-back').click(function() {
				back();
			});

			$('#form-submit').click(function() {
				submit();
			});

			$('.form-input').click(function() {
				$(this).removeClass('input-error');
			});
		}

		function init() {
			tinymce.init({
				selector: 'textarea#events-description',
				height: 300,
				width: '100%',
				plugins: ["advlist autolink lists link charmap preview", "searchreplace visualblocks code", "table contextmenu paste"],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
				paste_as_text: true
			});

			tinymce.init({
				selector: 'textarea#events-description-lang',
				height: 300,
				width: '100%',
				plugins: ["advlist autolink lists link charmap preview", "searchreplace visualblocks code", "table contextmenu paste"],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent",
				paste_as_text: true
			});

			$('.ui.search.dropdown.form-input').dropdown('clear');

			$('#events-date').datepicker({
                dateFormat: 'yy-mm-dd'
            });
		}

		function reset() {
			$('#events-name').val("");
			$('#events-subtitle').val("");
			$('#events-about').val("");
			$('#events-location').val("");
			$('#events-date').val("");
			$('#events-time').val("");
			$('#events-description').val("");

			$('#events-name-lang').val("");
			$('#events-subtitle-lang').val("");
			$('#events-about-lang').val("");
			$('#events-description-lang').val("");

			$('#events-metatag-title').val("");
			$('#events-metatag-author').val("");
			$('#events-metatag-description').val("");
			$('#events-metatag-keywords').val("");

			$('#main-image').val("");
			$('#preview').data('image_id', 0);
		}

		function submit() {
			var eventsName = $('#events-name').val();
			var eventsSubtitle = $('#events-subtitle').val();
			var eventsAbout = $('#events-about').val();
			var eventsLocation = $('#events-location').val();
			var eventsDate = $('#events-date').val();
			var eventsTime = $('#events-time').val();
			var eventsDescription = tinyMCE.get('events-description').getContent();

			var eventsNameLang = $('#events-name-lang').val();
			var eventsSubtitleLang = $('#events-subtitle-lang').val();
			var eventsAboutLang = $('#events-about-lang').val();
			var eventsDescriptionLang = tinyMCE.get('events-description-lang').getContent();

			var eventsMetatagTitle = $('#events-metatag-title').val();
			var eventsMetatagAuthor = $('#events-metatag-author').val();
			var eventsMetatagKeywords = $('#events-metatag-keywords').val();
			var eventsMetatagDescription = $('#events-metatag-description').val();

			var imageId = $('#preview').data('image_id');

			var found = 0;

			$.each($('.data-important'), function(key, data) {
				if ($(data).val() == '' || $(data).val() <= 0) {
					found += 1;

					$(data).addClass('input-error');
				}
			});

			if (found > 0) {
				return;
			}

			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					name: eventsName,
					subtitle: eventsSubtitle,
					about: eventsAbout,
					location: eventsLocation,
					date: eventsDate,
					time: eventsTime,
					description: eventsDescription,
					name_lang: eventsNameLang,
					subtitle_lang: eventsSubtitleLang,
					about_lang: eventsAboutLang,
					description_lang: eventsDescriptionLang,
					metatag_title: eventsMetatagTitle,
					metatag_author: eventsMetatagAuthor,
					metatag_keywords: eventsMetatagKeywords,
					metatag_description: eventsMetatagDescription,
					image_id: imageId,
					"<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
				},
				dataType: 'JSON',
				error: function() {
					$('.ui.dimmer.all-loader').dimmer('hide');
					$('.ui.basic.modal.all-error').modal('show');
					$('.all-error-text').html('Server Error.');
				},
				success: function(data){
					if (data.status == 'success') {
						$('.ui.text.loader').html('Redirecting...');

						back();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>events/ajax_add/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Checking Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Updating Database...');
					}, false);

					return xhr;
				},
			});
		}
	</script>

	<!-- Dashboard Here -->
	<div class="main-content">
		<div class="ui stackable one column centered grid">
			<div class="column">
				<div class="ui attached message setting-header">
					<div class="header">Add New Events</div>
				</div>
				<div class="form-content">
					<div class="ui form">
						<h4 class="ui dividing header">Events - Details <?= $setting->setting__system_language; ?></h4>
						<div class="two fields">
							<div class="field">
								<label>Title <span class="color-red">*</span></label>
								<input id="events-name" class="form-input data-important" placeholder="Title.." type="text">
							</div>
							<div class="field">
								<label>About <span class="color-red">*</span></label>
								<input id="events-about" class="form-input data-important" placeholder="About.." type="text">
							</div>
						</div>

						<div class="field">
							<label>Subtitle <span class="color-red">*</span></label>
							<input id="events-subtitle" class="form-input data-important" placeholder="Subtitle.." type="text">
						</div>

						<div class="two fields">
							<div class="field">
								<label>Location <span class="color-red">*</span></label>
								<input id="events-location" class="form-input data-important" placeholder="Location.." type="text">
							</div>
							<div class="field">
								<label>Date <span class="color-red">*</span></label>
								<input id="events-date" class="form-input data-important" placeholder="Date.." type="text">
							</div>
							<div class="field">
								<label>Time <span class="color-red">*</span></label>
								<input id="events-time" class="form-input data-important" placeholder="Time.." type="text">
							</div>
						</div>

						<div class="field">
							<label>Description <span class="color-red">*</span></label>
							<textarea id="events-description" placeholder="Description.."></textarea>
						</div>

						<h4 class="ui dividing header">Events - Details <?= $setting->setting__system_language2; ?></h4>
						<div class="two fields">
							<div class="field">
								<label>Title </label>
								<input id="events-name-lang" class="form-input" placeholder="Title.." type="text">
							</div>
							<div class="field">
								<label>About</label>
								<input id="events-about-lang" class="form-input" placeholder="About.." type="text">
							</div>
						</div>
						<div class="field">
							<label>Subtitle</label>
							<input id="events-subtitle-lang" class="form-input" placeholder="Subtitle.." type="text">
						</div>
						<div class="field">
							<label>Description</label>
							<textarea id="events-description-lang" placeholder="Description.."></textarea>
						</div>

						<h4 class="ui dividing header">Events - SEO Meta Tag</h4>
						<div class="three fields">
							<div class="field">
								<label>Metatag Title</label>
								<input id="events-metatag-title" class="form-input" placeholder="Metatag Title.." type="text">
							</div>
							<div class="field">
								<label>Metatag Author</label>
								<input id="events-metatag-author" class="form-input" placeholder="Metatag Author.." type="text">
							</div>
							<div class="field">
								<label>Metatag Keywords</label>
								<input id="events-metatag-keywords" class="form-input" placeholder="Metatag Keywords.." type="text">
							</div>
						</div>
						<div class="field">
							<label>Metatag Description</label>
							<input id="events-metatag-description" class="form-input" placeholder="Metatag Description.." type="text">
						</div>

						<h4 class="ui dividing header">Upload Image</h4>
						<div class="three fields">
							<div class="field">
								<label>Upload Image <span class="color-red">*</span></label>
								<div>Recommended Size: 1200px x 900px</div>
								<div style="padding-bottom: 5px;">Max File Size: 500kb</div>
								<input id="main-image" class="form-input data-important" placeholder="Upload Image.." type="File">
							</div>
						</div>

						<div class="three fields">
							<div class="field">
								<label>Preview Image </label>
								<div id="preview"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui bottom attached message text-right setting-header">
					<div class="ui buttons">
						<button id="form-back" class="ui left attached button form-button">Back</button>
						<button id="form-submit" class="ui right attached button form-button">Save</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>