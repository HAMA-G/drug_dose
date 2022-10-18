@extends('layouts.admin')
@section('title', '患者一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>患者一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\PatientController@add') }}" role="button" class="btn btn-primary">新規患者登録</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\PatientController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">患者名</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_name" value="{{ $cond_name }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-news col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="50%">患者名</th>
                                <th width="20%">年齢</th>
                                <th width="20%">性別</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $patient)
                                <tr>
                                    <th>{{ $patient->id }}</th>
                                    <td>{{ \Str::limit($patient->name, 100) }}</td>
                                    <td>{{ \Str::limit($patient->age, 250) }}</td>
                                    <td>{{ \Str::limit($patient->sex, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\PatientController@edit', ['id' => $patient->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a href="{{ action('Admin\PatientController@delete', ['id' => $patient->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection