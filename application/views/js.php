<script type="text/javascript">
  	$(function() {

  	});

  	function changeLanguage(lang) {
        $.ajax({
            data: {
                "<?= $csrf['name'] ?>": "<?= $csrf['hash'] ?>"
            },
            dataType: 'JSON',
            success: function(data) {
                window.location.reload();
            },
            type : 'POST',
            url : '<?= base_url(); ?>main/ajax_set_language/'+ lang +'/'
        });
    }
</script>