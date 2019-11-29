$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

var saveImage = function(name) {
	saveSettings(name, $('#' + name + 'Hidden').val(), function () {
		var $desc = $('#' + name + 'Desc');
		if ($desc.length) {
			$desc.html('');
		}
		if (name === 'photoForPhotoGallery') {
			document.location.reload();
		}
	});
};

var saveText = function (name) {
	saveSettings(name, $('#' + name).val());
};

var saveTextTinyMce = function (name) {
	saveSettings(name, tinyMCE.get(name).getContent());
};

var saveSettings = function (name, value, callbackSuccess, callbackError) {
	$('#spinner').show();
	$.post('/settings/save', {name: name, value: value}, function (response) {
		$('#spinner').hide();
		if (callbackSuccess) {
			callbackSuccess();
		}
	}).fail(function() {
		alert( "error" );
		$('#spinner').hide();
		if (callbackError) {
			callbackError();
		}
	})
};
