@extends('layouts.origin')
@section('content')
    <p class="return_button"><button type="button" onclick="location.href='/'">戻る</button></p>
    <div class="table_wrapper">
        <button type="button" onclick="location.href='/user/register'">新規登録</button>
        <table>
            <tr>
                <th>名前</th> <th>入社日</th> <th>詳細</th> <th>編集</th>
            </tr>
            @foreach($employees as $employee)
            <tr>
                <td>{{$employee->last_name}} {{$employee->first_name}}</td> <td>{{$employee -> created_at}}</td> <td>詳細</td> <td>編集</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="return_button">
        <button  type="button" onclick="location.href='/'">戻る</button>
    </div>
@endsection
