@extends('layouts.admin')

@section('content')



    <div class="container">

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Header Logo
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'logoImgFile';
                @endphp
                @include('admin.fields.uploadImg')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Header Logo Text<br>RO
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'logotext_ro';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Header Logo Text<br>RU
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'logotext_ru';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Header Logo Text<br>EN
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'logotext_en';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>




        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Email
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'email';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>




        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Telefon 1
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'phone1';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>



        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Telefon 2
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'phone2';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Title Icon<br/>
                <small>(.ico file)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'ico';
                @endphp
                @include('admin.fields.uploadImg')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Title<br>RO
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'title_ro';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Title<br>RU
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'title_ru';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Title<br>EN
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'title_en';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Keywords<br>RO<br>
                <small>(cuvinte cheie, prin virgula)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'keywords_ro';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Keywords<br>RU<br>
                <small>(cuvinte cheie, prin virgula)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'keywords_ru';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>

        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Keywords<br>EN<br>
                <small>(cuvinte cheie, prin virgula)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'keywords_en';
                @endphp
                @include('admin.fields.text')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Description<br>RO<br>
                <small>(descriere, 1,2 propozitii, pentru motoarele de cautare)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'description_ro';
                @endphp
                @include('admin.fields.textarea')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Description<br>RU<br>
                <small>(descriere, 1,2 propozitii, pentru motoarele de cautare)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'description_ru';
                @endphp
                @include('admin.fields.textarea')
            </div>
        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-2">
                Description<br>EN<br>
                <small>(descriere, 1,2 propozitii, pentru motoarele de cautare)</small>
            </div>
            <div class="col-md-10">
                @php
                    $filedName = 'description_en';
                @endphp
                @include('admin.fields.textarea')
            </div>
        </div>
    </div>
@endsection
