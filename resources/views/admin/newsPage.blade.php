@extends('layouts.admin')

@section('content')


    <div class="container">

        <div class="row justify-content-center content-box">

            <div class="col-md-12">
                <a class="btn btn-primary" href="/admin/page/news?article=0&edit=1">Adaugă</a>


                <div id="addNew"
                     style="margin-top: 40px;display: {{ ($edit) ? '' : 'none' }};">

                    <form action="/admin/news/add" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{$articleEdit->id ?? ''}}" id="id" />


                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Imagine reprezentatiză</label>
                            <div class="col-sm-10">
                                <img id="photo_img" src="/uploads/{{$articleEdit->photo ?? 'no-image.png'}}" style="height: 100px;"/>
                                <input type="file" name="photo" id="photo" placeholder=""/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Tema RO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_ro"
                                       value="{{$articleEdit->name_ro ?? ''}}" id="name_ro" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ru" class="col-sm-2 col-form-label">Tema RU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_ru"
                                       value="{{$articleEdit->name_ru ?? ''}}" id="name_ru" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_en" class="col-sm-2 col-form-label">Tema EN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_en"
                                       value="{{$articleEdit->name_en ?? ''}}" id="name_en" placeholder=""/>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Text RO</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="text_ro" name="text_ro" class="textarea-with-tinymce" >
                                    {{$articleEdit->text_ro ?? ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Text RU</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="text_ru" name="text_ru" class="textarea-with-tinymce" >
                                    {{$articleEdit->text_ru ?? ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Text EN</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="text_en" name="text_en" class="textarea-with-tinymce" >
                                    {{$articleEdit->text_en ?? ''}}
                                </textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label"> </label>
                            <div class="col-sm-10">
                                <input type="submit" name="cat_submit" value="Save" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-12">

                <h3>Lista de Articole</h3>

                <table class="table">
                @foreach ($articlesData as $item)
                        <tr id="article{{ $item->id }}">
                            <td style="width: 20px">
                                {{ $item->id }}
                            </td>
                            <td>
                                <a href="?article={{ $item->id }}&edit=1" target="_self">
                                   {{$item->name_ro}}
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="?article={{ $item->id }}&edit=1" style="color: green;margin:0 20px;">
                                    <img style="height: 20px;" src="{{asset('img/pencil.svg')}}">
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="javascript:void(0)" style="color: red;" onclick="deleteArticle({{ $item->id }})">
                                    <img style="height: 20px;" src="{{asset('img/close.svg')}}">
                                </a>
                            </td>
                        </tr>
                @endforeach
                </table>

            </div>
        </div>

    </div>

    <script>
	    function readURL(input) {
		    if (input.files && input.files[0]) {
			    var reader = new FileReader();
			    reader.onload = function(e) {
				    $('#photo_img').attr('src', e.target.result);
			    };
			    reader.readAsDataURL(input.files[0]);
		    }
	    }
	    $("#photo").change(function() {
		    readURL(this);
	    });

    </script>

@endsection
