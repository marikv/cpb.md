@extends('layouts.admin')

@section('content')






    <div class="container">

        <h2>Section 1</h2>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Imagine reprezentativa
                <smal>(background)</smal>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'langing_bg_1';
                @endphp
                @include('admin.fields.uploadImg')
            </div>
        </div>



        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Text Titlu<br>RO<br>
                <small></small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'home_section_title_ro';
                @endphp
                @include('admin.fields.textarea')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Text Titlu<br>RU<br>
                <small></small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'home_section_title_ru';
                @endphp
                @include('admin.fields.textarea')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Text Titlu<br>EN<br>
                <small></small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'home_section_title_en';
                @endphp
                @include('admin.fields.textarea')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Descriere<br>RO<br>
                <small></small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'home_section_text_ro';
                @endphp
                @include('admin.fields.textarea-with-tinymce')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Description<br>RU<br>
                <small></small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'home_section_text_ru';
                @endphp
                @include('admin.fields.textarea-with-tinymce')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Description<br>EN<br>
                <small></small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'home_section_text_en';
                @endphp
                @include('admin.fields.textarea-with-tinymce')
            </div>
        </div>
    </div>

@endsection
