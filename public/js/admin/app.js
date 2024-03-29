$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

function readURL(input, n) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function(e) {
			$('#'+n+'_img').attr('src', e.target.result);
		};
		reader.readAsDataURL(input.files[0]);
	}
}


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
	saveSettings(name, $('#' + name).val(), function () {
		if (name === 'videoForVideoGallery') {
			document.location.reload();
		}
	});
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


var deletePhotoOrVideoFromGallery = function (id) {
	if (confirm("Sunteti sigur ca doriti sa stergeti?")) {
		$('#spinner').show();
		$.post('/photo-gallery/delete', { id: id }, function (response) {
			$('#spinner').hide();
			$('#imgGallery' + id).hide();
		}).fail(function() {
			alert( "error" );
			$('#spinner').hide();
		})
	}
};


var deleteFaq = function (id) {
	if (confirm("Sunteti sigur ca doriti sa stergeti?")) {
		$('#spinner').show();
		$.post('/faq/delete', { id: id }, function (response) {
			$('#spinner').hide();
			$('#faq' + id).hide();
		}).fail(function() {
			alert( "error" );
			$('#spinner').hide();
		})
	}
};

var deleteArticle = function (id) {
	if (confirm("Sunteti sigur ca doriti sa stergeti?")) {
		$('#spinner').show();
		$.post('/article/delete', { id: id }, function (response) {
			$('#spinner').hide();
			$('#article' + id).hide();
		}).fail(function() {
			alert( "error" );
			$('#spinner').hide();
		})
	}
};


var deletePdf = function (id) {
	if (confirm("Sunteti sigur ca doriti sa stergeti?")) {
		$('#spinner').show();
		$.post('/pdf/delete', { id: id }, function (response) {
			$('#spinner').hide();
			$('#item' + id).hide();
		}).fail(function() {
			alert( "error" );
			$('#spinner').hide();
		})
	}
};

var iter = 0;
var interv = setInterval(() => {
	var cl = '.tox.tox-silver-sink.tox-tinymce-aux > .tox-notifications-container';
	if (document.querySelectorAll(cl).length) {
		for (var i = 0; i < document.querySelectorAll(cl).length; i ++) {
			document.querySelectorAll(cl)[i].style.display = 'none';
		}
	}
	iter++;
	if (iter >= 40) {
		clearInterval(interv);
	}
}, 500);