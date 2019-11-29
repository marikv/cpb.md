@extends('layouts.admin')

@section('content')


    <div class="container">

        <div class="row justify-content-center content-box">

            <div class="col-md-12">
                @php
                    $filedName = 'photoForPhotoGallery';
                @endphp
                @include('admin.fields.uploadImg')
            </div>

            <div class="col-md-12" style="margin-top: 60px;">

                @foreach ($photos as $photo)
                    <div id="imgGallery{{ $photo->id }}" style="padding: 5px; float: left;margin: 10px;position: relative;">
                        <a href="/uploads/{{ $photo->path }}" target="_blank">
                            <img src="/uploads/{{ $photo->path }}" height="150px" style="border-radius: 4px;"/>
                        </a>
                        <div onclick="deletePhotoFromGallery({{ $photo->id }})" class="deleteIcon">X</div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

    <script>
        var deletePhotoFromGallery = function (id) {
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
        }
    </script>

@endsection
