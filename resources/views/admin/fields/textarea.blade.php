<style>
    #{{ $filedName }}{
        border: 1px solid #949494;
        margin: 0 10px;
        background: white;
        float: left;
        border-radius: 4px;
        width: 90%;
        padding: 5px 10px;
        min-height: 100px;
    }
    #{{ $filedName }}Button{
        height: 40px;
    }
</style>

<div style="display: flex;flex-wrap: wrap;width: 100%;">
    <textarea id="{{ $filedName }}" name="{{ $filedName }}" >{{ $settingsData[$filedName] }}</textarea>
    <input onclick="saveText('{{ $filedName }}')" class="btn btn-primary" type="button" id="{{ $filedName }}Button" value="Save" />
</div>
