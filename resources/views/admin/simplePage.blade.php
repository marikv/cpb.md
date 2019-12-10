@extends('layouts.admin')

@section('content')


    <div class="container">

        <div class="row justify-content-center content-box">

            <div class="col-md-12">

                    <form action="/admin/simplePage/save" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{!empty($data->id) ? $data->id : ''}}" id="id" />


{{--                        <div class="form-group row">--}}
{{--                            <label for="name_ro" class="col-sm-2 col-form-label">Foto</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <img id="photo_img" src="/uploads/{{!empty($data->photo) ? $data->photo : 'no-image.png'}}" style="height: 100px;"/>--}}
{{--                                <input type="file" name="photo" id="photo" placeholder=""/>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="form-group row">--}}
{{--                            <label for="name_ro" class="col-sm-2 col-form-label">alias</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" class="form-control" name="alias"--}}
{{--                                       value="{{!empty($data->alias) ? $data->alias : ''}}" id="alias" placeholder=""/>--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="form-group row">--}}
{{--                            <label for="name_ro" class="col-sm-2 col-form-label">Nume RO</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" class="form-control" name="name_ro"--}}
{{--                                       value="{{!empty($data->name_ro) ? $data->name_ro : ''}}" id="name_ro" placeholder=""/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="name_ru" class="col-sm-2 col-form-label">Nume RU</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" class="form-control" name="name_ru"--}}
{{--                                       value="{{!empty($data->name_ru) ? $data->name_ru : ''}}" id="name_ru" placeholder=""/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group row">--}}
{{--                            <label for="name_en" class="col-sm-2 col-form-label">Nume EN</label>--}}
{{--                            <div class="col-sm-10">--}}
{{--                                <input type="text" class="form-control" name="name_en"--}}
{{--                                       value="{{!empty($data->name_en) ? $data->name_en : ''}}" id="name_en" placeholder=""/>--}}
{{--                            </div>--}}
{{--                        </div>--}}



                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-12 col-form-label">Text RO</label>
                            <div class="col-sm-12">
                                <textarea rows="13" style="height: 500px" id="text_ro" name="text_ro" class="textarea-with-tinymce" >
                                    {{!empty($data->text_ro) ? $data->text_ro : ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-12 col-form-label">Text RU</label>
                            <div class="col-sm-12">
                                <textarea rows="13" style="height: 500px" id="text_ru" name="text_ru" class="textarea-with-tinymce" >
                                    {{!empty($data->text_ru) ? $data->text_ru : ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-12 col-form-label">Text EN</label>
                            <div class="col-sm-12">
                                <textarea rows="13" style="height: 500px" id="text_en" name="text_en" class="textarea-with-tinymce" >
                                    {{!empty($data->text_en) ? $data->text_en : ''}}
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

@endsection
