@extends('layouts.admin')

@section('content')


    <div class="container">

        <div class="row justify-content-center content-box">

            <div class="col-md-12">
                <a class="btn btn-primary" href="/admin/page/pdf?pdf=0&edit=1">Adaugă</a>


                <div id="addNew"
                     style="margin-top: 40px;display: {{ ($edit) ? '' : 'none' }};">

                    <form action="/admin/pdf/add" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{$itemEdit->id ?? ''}}" id="id" />


                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Imagine reprezentatiză</label>
                            <div class="col-sm-10">
                                <img id="photo_img" src="/uploads/{{$itemEdit->photo ?? 'no-image.png'}}" style="height: 100px;"/>
                                <input type="file" name="photo" id="photo" placeholder=""/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">PDF</label>
                            <div class="col-sm-10">
                                <input type="file" name="pdf" id="pdf" placeholder=""/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Titlu RO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_ro"
                                       value="{{$itemEdit->name_ro ?? ''}}" id="name_ro" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ru" class="col-sm-2 col-form-label">Titlu RU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_ru"
                                       value="{{$itemEdit->name_ru ?? ''}}" id="name_ru" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_en" class="col-sm-2 col-form-label">Titlu EN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name_en"
                                       value="{{$itemEdit->name_en ?? ''}}" id="name_en" placeholder=""/>
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

                <h3>Lista </h3>

                <table class="table">
                    @foreach ($pdfsData as $item)
                        <tr id="item{{ $item->id }}">
                            <td style="width: 20px">
                                {{ $item->id }}
                            </td>
                            <td style="width: 60px">
                                <a href="/uploads/{{ $item->pdf }}" target="_blank">
                                    <img src="/uploads/{{ $item->photo }}" style="height: 50px"/>
                                </a>
                            </td>
                            <td>
                                <a href="/uploads/{{ $item->pdf }}" target="_blank">
                                    {{$item->name_ro}}
                                </a>
                            </td>
                            <td>

                            </td>
                            <td style="width: 20px;">
                                <a href="javascript:void(0)" style="color: red;" onclick="deletePdf({{ $item->id }})">
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
