<style>
    #{{ $filedName }}Img{
        border: 1px solid #949494;
        margin: 0 10px;
        background: white;
        float: left;
        border-radius: 4px;
    }
    #{{ $filedName }}Desc {
        font-size: 12px;
        color: #a1a0a0;
    }
</style>

<form method="post" action="" enctype="multipart/form-data" id="{{ $filedName }}Form">
    <img src="/uploads/{{ $settingsData[$filedName] ?: 'no-image.png' }}" id="{{ $filedName }}Img" height="90">

        <label for="{{ $filedName }}" class="btn btn-primary">Alege o imagine</label>
        <input type="file" id="{{ $filedName }}" name="file"  >

    <input type="hidden" id="{{ $filedName }}Hidden" value="{{ $settingsData[$filedName] }}" />
    <div id="{{ $filedName }}Desc"></div>
</form>
<input onclick="saveImage('{{ $filedName }}')"
       type="button"
       class="btn btn-primary"
       id="{{ $filedName }}Button" disabled="disabled" value="Save" />

<script>
	$(document).ready(function(){
		$("#{{ $filedName }}").change(function(){
			var fd = new FormData();
			var files = $('#{{ $filedName }}')[0].files[0];
			fd.append('file', files);
			$('#{{ $filedName }}Desc').html('Loading....');
			$('#{{ $filedName }}Button').attr('disabled', true);
			$.ajax({
				url: '/files/upload/image',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					if(response && response.file){
						$('#{{ $filedName }}Hidden').val(response.file);
						$("#{{ $filedName }}Img").attr("src", '/uploads/' + response.file);
						$('#{{ $filedName }}Desc').html('pentru a salva, apasa butonul "Save"');
						$('#{{ $filedName }}Button').attr('disabled', false);
					}else{
						$('#{{ $filedName }}Desc').html('Eroare....');
					}
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					$('#{{ $filedName }}Desc').html("Status: " + textStatus + " Error: " + errorThrown);
				}
			});
		});
	});
</script>