@extends('layouts.admin')
@section('title', '患者登録内容変更')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>編集</h2>
                <form action="{{ action('Admin\PatientController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for='name'>患者名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $patient_form->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="sex" value="{{ $patient_form->sex }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">疾患名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="disease" value="{{ $patient_form->disease }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="{{ $patient_form->age }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">身長</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="height" value="{{ $patient_form->height }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">体重</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="weight" value="{{ $patient_form->weight }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">白血球</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="wbc" value="{{ $patient_form->wbc }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ヘモグロビン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hb" value="{{ $patient_form->hb }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">血小板</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="plt" value="{{ $patient_form->plt }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">AST</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ast" value="{{ $patient_form->ast }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ALT</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="alt" value="{{ $patient_form->alt }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">総ビリルビン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tbil" value="{{ $patient_form->tbil }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">直接ビリルビン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="dbil" value="{{ $patient_form->dbil }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">γGTP</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gtp" value="{{ $patient_form->gtp }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">クレアチニン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="scr" value="{{ $patient_form->scr }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">eGFR</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="egfr" value="{{ $patient_form->egfr }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">CRP</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="crp" value="{{ $patient_form->crp }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $patient_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection