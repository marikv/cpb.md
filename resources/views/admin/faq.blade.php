@extends('layouts.admin')

@section('content')

    @php
        $edit = Request::get('edit');
    @endphp

    <div class="container">


        <div class="row justify-content-center content-box">
            <div class="col-md-12">
                <a class="btn btn-primary" href="/admin/page/faq?faq=0&edit=1">Adauga</a>
                <div id="addFAQ"
                     style="margin-top: 40px;display: {{ ($edit) ? '' : 'none' }};">

                    <form action="/admin/faq/add" method="post">
                        {{csrf_field()}}

                        <input type="hidden" name="id" value="{{$edit && !empty($faqEdit->id) ? $faqEdit->id : ''}}" id="id" />

                        <div class="form-group row">
                            <label for="query_ro" class="col-sm-2 col-form-label">Întrebare RO</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="query_ro"
                                       value="{{$edit && !empty($faqEdit->query_ro) ? $faqEdit->query_ro : ''}}" id="query_ro" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="query_ru" class="col-sm-2 col-form-label">Întrebare RU</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="query_ru"
                                       value="{{$edit && !empty($faqEdit->query_ru) ? $faqEdit->query_ru : ''}}" id="query_ru" placeholder=""/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="query_en" class="col-sm-2 col-form-label">Întrebare EN</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="query_en"
                                       value="{{$edit && !empty($faqEdit->query_en) ? $faqEdit->query_en : ''}}" id="query_en" placeholder=""/>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Răspuns RO</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="answer_ro" name="answer_ro" class="textarea-with-tinymce" >
                                    {{$edit && !empty($faqEdit->answer_ro) ? $faqEdit->answer_ro : ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Răspuns RU</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="answer_ru" name="answer_ru" class="textarea-with-tinymce" >
                                    {{$edit && !empty($faqEdit->answer_ru) ? $faqEdit->answer_ru : ''}}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name_ro" class="col-sm-2 col-form-label">Răspuns EN</label>
                            <div class="col-sm-10">
                                <textarea rows="13" style="height: 500px" id="answer_en" name="answer_en" class="textarea-with-tinymce" >
                                    {{$edit && !empty($faqEdit->answer_en) ? $faqEdit->answer_en : ''}}
                                </textarea>
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-2 col-form-label"> </div>
                            <div class="col-sm-10">
                                <input type="submit" name="submit" value="Save" class="btn btn-primary">
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>


        <div class="row justify-content-center content-box">
            <div class="col-md-12">

                <h3>Lista de întrebari</h3>

                <table class="table">
                    @foreach ($faqData as $item)
                        <tr id="faq{{ $item->id }}">
                            <td style="width: 20px">
                                {{ $item->id }}
                            </td>
                            <td>
                                {{$item->query_ro}}
                            </td>
                            <td style="width: 20px;">
                                <a href="?faq={{ $item->id }}&edit=1" style="color: green;margin:0 20px;">
                                    <img style="height: 20px;" src="{{asset('img/pencil.svg')}}">
                                </a>
                            </td>
                            <td style="width: 20px;">
                                <a href="javascript:void(0)" style="color: red;" onclick="deleteFaq({{ $item->id }})">
                                    <img style="height: 20px;" src="{{asset('img/close.svg')}}">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>

    </div>

@endsection
