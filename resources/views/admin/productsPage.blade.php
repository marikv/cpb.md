@extends('layouts.admin')

@section('content')


    <div class="container">

        <div class="row justify-content-center content-box">

            <div class="col-md-12">
                <button class="btn btn-primary" onclick="$('#addProduct').slideUp();$('#addCategory').slideDown();">Adauga o categorie nouă</button>
                <button class="btn btn-primary" onclick="$('#addProduct').slideDown();$('#addCategory').slideUp();">Adauga un produs nou</button>


                <div id="addCategory"
                     style="margin-top: 40px;display: {{ (Request::get('category') > 0 && $edit) ? '' : 'none' }};">

                    <form action="/admin/category/add" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="cat_id" value="{{$edit && $categoryEdit->id ? $categoryEdit->id : ''}}" id="cat_id" />

                        <div class="form-group row">
                            <label for="cat_nume_ro" class="col-sm-2 col-form-label">Nume RO</label>
                            <div class="col-sm-10">
                                <input type="text"
                                       class="form-control"
                                       name="cat_nume_ro"
                                       value="{{$edit && $categoryEdit->name_ro ? $categoryEdit->name_ro : ''}}"
                                       id="cat_nume_ro" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_nume_ru" class="col-sm-2 col-form-label">Nume RU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cat_nume_ru"
                                       value="{{$edit && $categoryEdit->name_ru ? $categoryEdit->name_ru : ''}}" id="cat_nume_ru" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cat_nume_en" class="col-sm-2 col-form-label">Nume EN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cat_nume_en"
                                       value="{{$edit && $categoryEdit->name_en ? $categoryEdit->name_en : ''}}" id="cat_nume_en" placeholder=""/>
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



                <div id="addProduct"
                     style="margin-top: 40px;display: {{ (Request::get('product') > 0 && Request::get('edit') == 1) ? '' : 'none' }};">

                    <form action="/admin/product/add" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{$productEdit->id ?? ''}}" id="id" />


                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-10">
                                <img src="/uploads/{{$productEdit->photo ?? 'no-image.png'}}" style="height: 100px;"/>
                                <input type="file" name="photo" id="photo" placeholder=""/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category_id" class="col-sm-2 col-form-label">Categorie</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="category_id" id="category_id" >
                                    @foreach ($categoriesData as $item)
                                        <option
                                                {{!empty($productEdit->category_id) && $item->id == $productEdit->category_id ? 'selected="selected"' : ''}}
                                                value="{{$item->id}}"
                                        >{{$item->name_ro}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Nume RO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_ro"
                                       value="{{$productEdit->name_ro ?? ''}}" id="name_ro" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ru" class="col-sm-2 col-form-label">Nume RU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_ru"
                                       value="{{$productEdit->name_ru ?? ''}}" id="name_ru" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_en" class="col-sm-2 col-form-label">Nume EN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_en"
                                       value="{{$productEdit->name_en ?? ''}}" id="name_en" placeholder=""/>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Text RO</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="text_ro" name="text_ro" class="textarea-with-tinymce" >
                                    {{$productEdit->text_ro ?? ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Text RU</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="text_ru" name="text_ru" class="textarea-with-tinymce" >
                                    {{$productEdit->text_ru ?? ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Text EN</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="text_en" name="text_en" class="textarea-with-tinymce" >
                                    {{$productEdit->text_en ?? ''}}
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

                <h3>Lista de Categorii</h3>

                <table class="table">
                @foreach ($categoriesData as $item)
                        <tr id="cat{{ $item->id }}">
                            <td style="width: 20px">
                                {{ $item->id }}
                            </td>
                            <td>
                                <a href="?category={{ $item->id }}" target="_self">
                                   {{$item->name_ro}}
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="?category={{ $item->id }}&edit=1" style="color: green;margin:0 20px;">
                                    <img style="height: 20px;" src="{{asset('img/pencil.svg')}}">
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="javascript:void(0)" style="color: red;" onclick="deleteCategory({{ $item->id }})">
                                    <img style="height: 20px;" src="{{asset('img/close.svg')}}">
                                </a>
                            </td>
                        </tr>
                @endforeach
                </table>

            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-12">

                <h3>Lista de Produse ({{$categoryEdit->name_ro ?? 'Toate categoriile'}})</h3>

                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Foto</th>
                        <th>Nume</th>
                        <th colspan="2"?></th>
                    </tr>
                    </thead>
                    @foreach ($productsData as $item)
                        <tr id="cat{{ $item->id }}">
                            <td style="width: 20px">
                                {{ $item->id }}
                            </td>
                            <td style="width: 40px">
                                <img src="/uploads/{{ $item->photo }}" style="height: 40px;border-radius: 3px;"/>
                            </td>
                            <td>
                                <a href="/#/products/{{ $item->id }}" target="_blank">
                                    {{$item->name_ro}}
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="?product={{ $item->id }}&edit=1" style="color: green;margin:0 20px;">
                                    <img style="height: 20px;" src="{{asset('img/pencil.svg')}}">
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="javascript:void(0)" style="color: red;" onclick="deleteProduct({{ $item->id }})">
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

        var deleteCategory = function (id) {
            if (confirm("Sunteti sigur ca doriti sa stergeti?")) {
	            $('#spinner').show();
	            $.post('/admin/category/delete', { id: id }, function (response) {
		            $('#spinner').hide();
		            $('#cat' + id).hide();
	            }).fail(function() {
		            alert( "error" );
		            $('#spinner').hide();
	            })
            }
        };
        var deleteProduct = function (id) {
	        if (confirm("Sunteti sigur ca doriti sa stergeti?")) {
		        $('#spinner').show();
		        $.post('/admin/product/delete', { id: id }, function (response) {
			        $('#spinner').hide();
			        $('#prod' + id).hide();
		        }).fail(function() {
			        alert( "error" );
			        $('#spinner').hide();
		        })
	        }
        };
    </script>

@endsection
