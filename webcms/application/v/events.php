	<style type="text/css">
	</style>

	<script type="text/javascript">
		$(function() {
			reset();
			init();
			eventsKeypress();
			eventsClick();
		});

		var filterQuery = '<?= $filter; ?>';

		function changeFilter(f) {
			filterQuery = f;
		}

		function deleteevents() {
			var eventsId = $('.delete-events-button').attr('data-events-id');
			var eventsUpdated = $('.delete-events-button').attr('data-events-updated');

			$('.ui.basic.modal.modal-warning-delete').modal('hide');
			$('.ui.text.loader').html('Connecting to Database...');
			$('.ui.dimmer.all-loader').dimmer('show');

			$.ajax({
				data :{
					updated: eventsUpdated,
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
				url : '<?= base_url() ?>events/ajax_delete/'+ eventsId +'/',
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

		function filter(page) {
			var searchQuery = ($('.input-search').val() == '') ? '' : $.base64('encode', $('.input-search').val());

			window.location.href = '<?= base_url(); ?>events/view/'+ page +'/'+ filterQuery +'/'+ searchQuery +'/';
		}

		function init() {
			$('.dropdown-search, .dropdown-filter').dropdown({
				allowAdditions: true
			});
		}

		function reset() {
			$('.input-search').val("<?= $query; ?>");
			$('#input-page').val("<?= $page; ?>");
		}

		function eventsClick() {
			$('.button-prev').click(function() {
				var page = parseInt('<?= $page; ?>');

				page = page - 1 ;

				if (page <= 0) {
					return;
				}

				filter(page);
			});

			$('.button-next').click(function() {
				var page = parseInt('<?= $page; ?>');
				var maxPage = parseInt('<?= $count_page; ?>');

				page = page + 1 ;

				if (page > maxPage) {
					return;
				}

				filter(page);
			});

			$('.open-modal-warning-delete').click(function() {
				var eventsId = $(this).attr('data-events-id');
				var eventsName = $(this).attr('data-events-name');
				var eventsUpdated = $(this).attr('data-events-updated');

				$('.delete-events-title').html('Delete events ' + eventsName);
				$('.delete-events-button').attr('data-events-id', eventsId);
				$('.delete-events-button').attr('data-events-updated', eventsUpdated);

				$('.ui.basic.modal.modal-warning-delete').modal('show');
			});
		}

		function eventsKeypress() {
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
	</script>

	<!-- Dashboard Here -->
	<div class="ui basic modal modal-warning-delete">
		<div class="ui icon header">
			<i class="trash outline icon delete-icon"></i>
			<span class="delete-events-title">Delete Events</span>
		</div>
		<div class="content text-center">
			<p>You're about to delete this Events. You will not be able to undo this action. Are you sure?</p>
		</div>
		<div class="actions">
			<div class="ui red basic cancel inverted button">
				<i class="remove icon"></i>
				No
			</div>
			<div class="ui green ok inverted button delete-events-button" onclick="deleteevents();">
				<i class="checkmark icon"></i>
				Yes
			</div>
		</div>
	</div>

	<div class="main-content">
		<div class="ui top attached menu table-menu">
			<div class="item item-add-button">
				Events Lists
			</div>
			<div class="right menu">
				<? if (isset($acl['events']) && $acl['events']->add != ''): ?>
					<a class="item item-add-button" href="<?= base_url(); ?>events/add/">
						<i class="add circle icon"></i> Add Events
					</a>
				<? endif; ?>
				<div class="item">
					<div class="ui dropdown dropdown-filter">
						<div class="text"><?= ucwords($filter); ?></div>
						<i class="dropdown icon"></i>
						<div class="menu">
							<div class="item" onclick="changeFilter('all');">All</div>
						</div>
					</div>
				</div>
				<div class="ui right aligned category search item search-item-container">
					<div class="ui transparent icon input">
						<input class="input-search" placeholder="Search..." type="text">
						<i class="search link icon"></i>
					</div>
					<div class="results"></div>
				</div>
			</div>
		</div>
		<div class="ui bottom attached segment table-segment">
			<table class="ui striped selectable sortable celled table">
				<thead>
					<tr>
						<th class="td-icon">Action</th>
						<th>Name</th>
						<th>Date</th>
						<th>Time</th>
						<th>location</th>
					</tr>
				</thead>
				<tbody>
					<? if (count($arr_events) <= 0): ?>
						<tr>
							<td colspan="5">No Result Founds</td>
						</tr>
					<? else: ?>
						<? foreach ($arr_events as $events): ?>
							<tr>
								<td class="td-icon">
									<? if (isset($acl['events']) && $acl['events']->edit > 0): ?>
										<a href="<?= base_url(); ?>events/edit/<?= $events->id; ?>/">
											<span class="table-icon" data-content="Edit events">
												<i class="edit icon"></i>
											</span>
										</a>
									<? endif; ?>

									<? if (isset($acl['events']) && $acl['events']->delete > 0): ?>
										<a class="open-modal-warning-delete" data-events-id="<?= $events->id; ?>" data-events-name="<?= $events->name; ?>" data-events-updated="<?= $events->updated; ?>">
											<span class="table-icon" data-content="Delete events">
												<i class="trash outline icon"></i>
											</span>
										</a>
									<? endif; ?>

									<? if (isset($acl['events']) && $acl['events']->list > 0): ?>
										<a href="<?= base_url(); ?>image/events/<?= $events->id; ?>/">
											<span class="table-icon" data-content="events Slideshow Image">
												<i class="image icon"></i>
											</span>
										</a>
									<? endif; ?>

									<? if (isset($acl['registrant']) && $acl['registrant']->list > 0): ?>
										<a href="<?= base_url(); ?>registrant/view/<?= $events->id; ?>/1/">
											<span class="table-icon" data-content="Registrant list">
												<i class="users icon"></i>
											</span>
										</a>
									<? endif; ?>
								</td>
								<td><?= $events->name; ?></td>
								<td><?= $events->date_display; ?></td>
								<td><?= $events->time; ?></td>
								<td><?= $events->location; ?></td>
							</tr>
						<? endforeach; ?>
					<? endif; ?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="5">
							<button class="ui button button-prev">Prev</button>
							<span>
								<div class="ui input input-page">
									<input id="input-page" placeholder="" type="text">
								</div> / <?= $count_page; ?>
							</span>
							<button class="ui button button-next">Next</button>
						</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</body>
</html>