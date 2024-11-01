(function($) {
	
	$('.select-all').on('change', function(){
		if( $(this).is(':checked') ){
			$('.checkbox').attr('checked', true);
		} else {
			$('.checkbox').attr('checked', false);
		}
	});
	
	$('form#wp-bootscraper-frontend-save').on('submit', function(){
		var id, url, form;
		id = $(this).attr('id');
		url = $(this).attr('action');
		form = $(this).serializeArray();
		$('#' + id + ' button').attr('disabled', true).html('Saving...');
		$.post(url, form, function( data ){
			$('#' + id + ' button').attr('disabled', false).html('Save Changes');
		});
		return false;
	});
	
})( jQuery );