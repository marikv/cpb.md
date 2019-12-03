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
                        <div onclick="deletePhotoOrVideoFromGallery({{ $photo->id }})" class="deleteIcon">X</div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>

@endsection
