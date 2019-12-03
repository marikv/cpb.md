@extends('layouts.admin')

@section('content')

    @php
        function convertYoutube($string) {
        return preg_replace(
            "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
            "<iframe src=\"//www.youtube.com/embed/$2?rel=0&feature=oembed&modestbranding=1&autohide=1&showinfo=0&controls=0\" frameborder=\"0\" allowfullscreen></iframe>",
            $string
        );
    }
    @endphp


    <div class="container">

        <div class="row justify-content-center content-box">




            <div class="col-md-12">
                Youtube Link:
                @php
                    $filedName = 'videoForVideoGallery';
                @endphp
                @include('admin.fields.text')
                <br>
                Exemplu: <span style="color: #9f9f9f;">https://www.youtube.com/watch?v=5wUKp0VDGsU</span><br>
                sau <span style="color: #9f9f9f;">https://youtu.be/5wUKp0VDGsU</span>
            </div>




            <div class="col-md-12" style="margin-top: 60px;">

                @foreach ($videos as $video)
                    <div id="imgGallery{{ $video->id }}" style="padding: 5px; float: left;margin: 10px;position: relative;">
                        {!! convertYoutube($video->path) !!}
                        <div onclick="deletePhotoOrVideoFromGallery({{ $video->id }})" class="deleteIcon">X</div>
                    </div>
                @endforeach

            </div>
        </div>

    </div>


@endsection
