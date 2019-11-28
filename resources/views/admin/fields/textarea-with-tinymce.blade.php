<style>
    #{{ $filedName }}{
        border: 1px solid #949494;
        margin: 0 10px;
        background: white;
        float: left;
        border-radius: 4px;
        width: 100%;
        padding: 5px 10px;
        min-height: 100px;
    }
    #{{ $filedName }}Button{
        height: 30px;
    }
</style>

<div style="width: 100%;">
    <textarea rows="13" style="height: 500px" id="{{ $filedName }}" name="{{ $filedName }}" class="textarea-with-tinymce" >{{ $settingsData[$filedName] }}</textarea>
    <input onclick="saveTextTinyMce('{{ $filedName }}')" type="button" id="{{ $filedName }}Button" value="Save" />
</div>

<script>
setTimeout(() => {
	var cl = '.tox.tox-silver-sink.tox-tinymce-aux > .tox-notifications-container';
	if (document.querySelectorAll(cl).length) {
        for (var i = 0; i < document.querySelectorAll(cl).length; i ++) {
	        document.querySelectorAll(cl)[i].style.display = 'none';
        }
    }
}, 4000);
</script>