	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			reset();
			init();
			eventsImageKeypress();
			eventsImageClick();
		});

		function changeFilter(f) {
			filterQuery = f;
		}

		function addeventsImage() {
			var eventsImageName = $('#events-image-name-add').val();
			var found = 0;

			$.each($('.data-important-add'), function(key, data) {
				if ($(data).val() == '') {
					found += 1;

					$('.color-red.warning').html('This Field Must Be Filled');
				}
			});

			if (found > 0) {
				return;
			}

			$('.add-events-image-modal').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					name: eventsImageName,
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

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.add-events-image-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>events_image/ajax_add/',
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

		function deleteeventsImage() {
			var eventsImageId = $('.delete-events-image-button').attr('data-events-image-id');
			var eventsImageUpdated = $('.delete-events-image-button').attr('data-events-image-updated');

			$('.ui.basic.modal.modal-warning-delete').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					updated: eventsImageUpdated,
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

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.ui.basic.modal.all-error').modal('show');
						$('.all-error-text').html(data.message);
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>image/ajax_delete/'+ eventsImageId +'/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Validating Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Delete Data from Database...');
					}, false);

					return xhr;
				},
			});
		}

		function editeventsImage() {
			var eventsImageName = $('#events-image-name-edit').val();
			var eventsImageId = $('#events-image-name-edit').data('events_image_id');
			var found = 0;

			$.each($('.data-important-edit'), function(key, data) {
				if ($(data).val() == '') {
					found += 1;

					$('.color-red.warning').html('This Field Must Be Filled');
				}
			});

			if (found > 0) {
				return;
			}

			$('.edit-events-image-modal').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					name: eventsImageName,
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

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.edit-events-image-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>events_image/ajax_edit/'+ eventsImageId +'/',
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

		function filter(page) {
			var searchQuery = ($('.input-search').val() == '') ? '' : $.base64('encode', $('.input-search').val());

			window.location.href = '<?= base_url(); ?>events_image/view/'+ page +'/'+ filterQuery +'/'+ searchQuery +'/';
		}

		function geteventsImage(eventsImageId) {
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
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
						$('.ui.dimmer.all-loader').dimmer('hide');

						$('#events-image-name-edit').val(data.events_image.name);
						$('#events-image-name-edit').data('events_image_id', eventsImageId);

						$('.edit-events-image-modal').modal({
							inverted: true,
						}).modal('show');
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.add-events-image-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				type : 'POST',
				url : '<?= base_url() ?>events_image/ajax_get/'+ eventsImageId +'/',
				xhr: function() {
					var percentage = 0;
					var xhr = new window.XMLHttpRequest();

					xhr.upload.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Checking Data..');
					}, false);

					xhr.addEventListener('progress', function(evt) {
						$('.ui.text.loader').html('Retrieving Data...');
					}, false);

					return xhr;
				},
			});
		}

		function init() {
			$('.dropdown-search, .dropdown-filter').dropdown({
				allowAdditions: true
			});
		}

		function reset() {
			$('#events-image-name-add').val("");
		}

		function eventsImageClick() {
			$('.item-add-button').click(function() {
				$('#events-image-name-add').val("");
				$('.color-red.warning').html("");

				$('.add-events-image-modal').modal({
					inverted: true,
				}).modal('show');
			});

			$('.open-modal-warning-delete').click(function() {
				var eventsImageId = $(this).attr('data-events-image-id');
				var eventsImageName = $(this).attr('data-events-image-name');
				var eventsImageUpdated = $(this).attr('data-events-image-updated');

				$('.delete-events-image-title').html('Delete events_image ' + eventsImageName);
				$('.delete-events-image-button').attr('data-events-image-id', eventsImageId);
				$('.delete-events-image-button').attr('data-events-image-updated', eventsImageUpdated);

				$('.ui.basic.modal.modal-warning-delete').modal('show');
			});
		}

		function eventsImageKeypress() {
			$('.input-search').keypress(function(e) {
				if (e.which == 13) {
					var page = 1;

					filter(page);
				}
			});

			$('#input-page').keypress(function(e) {
				if (e.which == 13) {
					var page = $('#input-page').val();

					filter(page);
				}
			});
		}

		function uploadeventsImage() {
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			var file_data = $('#events-image-name-add').prop('files')[0];
			var form_data = new FormData();
			form_data.append('file', file_data);
			form_data.append("<?= $csrf['name'] ?>", "<?= $csrf['hash'] ?>");

			$('.bar').width(0);
			$('#loading').modal('show');

			$.ajax({
				cache: false,
				contentType: false,
				data: form_data,
				dataType: 'JSON',
				error: function() {
					$('.ui.dimmer.all-loader').dimmer('hide');
					$('.ui.basic.modal.all-error').modal('show');
					$('.all-error-text').html('Server Error.');
				},
				processData: false,
				type: 'post',
				success: function(data) {
					if (data.status == 'success') {
						$('.ui.text.loader').html('Redirecting...');

						window.location.reload();
					}
					else {
						$('.ui.dimmer.all-loader').dimmer('hide');
						$('.color-red.warning').html(data.message);

						$('.add-events-image-modal').modal({
							inverted: true,
						}).modal('show');
					}
				},
				url: '<?= base_url(); ?>image/ajax_upload_events/<?= $events->id; ?>',
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
		}
	</script>

	<!-- Dashboard Here -->
	<div class="ui basic modal modal-warning-delete">
		<div class="ui icon header">
			<i class="trash outline icon delete-icon"></i>
			<span class="delete-events-image-title">Delete events Image</span>
		</div>
		<div class="content text-center">
			<p>You're about to delete this events Image. You will not be able to undo this action. Are you sure?</p>
		</div>
		<div class="actions">
			<div class="ui red basic cancel inverted button">
				<i class="remove icon"></i>
				No
			</div>
			<div class="ui green ok inverted button delete-events-image-button" onclick="deleteeventsImage();">
				<i class="checkmark icon"></i>
				Yes
			</div>
		</div>
	</div>

	<div class="ui modal add-events-image-modal">
		<i class="close icon"></i>
		<div class="header">Add events Image - <?= $events->name; ?></div>
		<div class="form-content content">
			<div class="form-add">
				<div class="form-content">
					<div class="ui form">
						<div class="field">
							<label>Name <span class="color-red warning"></label>
							<input id="events-image-name-add" type="file" accept="image/*" class="data-important-add" placeholder="Name..">
						</div>
					</div>
				</div>
			</div>
			<div class="actions text-right">
				<div class="ui deny button form-button">Exit</div>
				<div class="ui button form-button" onclick="uploadeventsImage();">Submit</div>
			</div>
		</div>
	</div>

	<div class="main-content">
		<div class="ui top attached menu table-menu">
			<a class="item" href="<?= base_url(); ?>events/view/1/">
				<i class="arrow left icon"></i> Back
			</a>
			<div class="item">
				Events Image - <?= $events->name; ?>
			</div>
			<div class="right menu">
				<? if (isset($acl['website']) && $acl['website']->add > 0): ?>
					<a class="item item-add-button">
						<i class="add circle icon"></i> Add Events Image
					</a>
				<? endif; ?>
			</div>
		</div>
		<div class="ui bottom attached segment table-segment">
			<table class="ui striped selectable celled table">
				<thead>
					<tr>
						<th class="td-icon">Action</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<? if (count($arr_image) <= 0): ?>
						<tr>
							<td colspan="3">No Result Founds</td>
						</tr>
					<? else: ?>
						<? foreach ($arr_image as $image): ?>
							<tr>
								<td class="td-icon">
									<? if (isset($acl['website']) && $acl['website']->delete > 0): ?>
										<a class="open-modal-warning-delete" data-events-image-id="<?= $image->id; ?>" data-events-image-name="<?= $image->name; ?>" data-events-image-updated="<?= $image->updated; ?>">
											<span class="table-icon">
												<i class="trash outline icon"></i>
											</span>
										</a>
									<? endif; ?>
								</td>
								<td>
									<a href="<?= base_url(); ?>images/website/<?= $image->image_name; ?>" target="_blank">
										<img src="<?= base_url(); ?>images/website/<?= $image->image_name; ?>" style="height: 75px;">
									</a>
								</td>
							</tr>
						<? endforeach; ?>
					<? endif; ?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>