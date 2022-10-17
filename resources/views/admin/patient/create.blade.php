@extends('layouts.admin')
@section('title', '患者情報登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>患者情報登録</h2>
                <form action="{{ action('Admin\PatientController@create') }}" method="post" enctype="multipart/form-data">

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
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">性別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="sex" value="{{ old('sex') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">疾患名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="disease" value="{{ old('disease') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">年齢</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">身長</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="height" value="{{ old('height') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">体重</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">白血球</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="wbc" value="{{ old('wbc') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ヘモグロビン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hb" value="{{ old('hb') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">血小板</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="plt" value="{{ old('plt') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">AST</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ast" value="{{ old('ast') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">ALT</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="alt" value="{{ old('alt') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">総ビリルビン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tbil" value="{{ old('tbil') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">直接ビリルビン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="dbil" value="{{ old('dbil') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">γGTP</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gtp" value="{{ old('gtp') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">クレアチニン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="scr" value="{{ old('scr') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">eGFR</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="egfr" value="{{ old('egfr') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">CRP</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="crp" value="{{ old('crp') }}">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection