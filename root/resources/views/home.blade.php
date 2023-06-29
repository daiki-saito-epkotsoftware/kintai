@extends('layouts.origin')
@section('content')
<div class=home_nav_wrapper>
    <h2>申請管理</h2>
    <nav>
        <ul>
            <li><button type="button">申請一覧</button></li>
            <li><button type="button">休日設定</button></li>
        </ul>
    </nav>
    <h2>社員管理</h2>
    <nav>
        <ul>
            <li><button type="button"  onclick="location.href='/users'">社員一覧</button></li>
            <li><button type="button">社員登録</button></li>
        </ul>
    </nav>
    <h2>休日設定</h2>
    <nav>
        <ul>
            <li><button type="button">休日一覧</button></li>
            <li><button type="button">休日登録</button></li>
        </ul>
    </nav>
    <h2>勤怠管理</h2>
    <nav>
        <ul>
            <li><button type="button">勤怠一覧</button></li>
            <li><button type="button">勤怠登録</button></li>
        </ul>
    </nav>
    <h2>各種申請</h2>
    <nav>
        <ul>
            <li><button type="button">休日申請</button></li>
            <li><button type="button">交通費申請</button></li>
        </ul>
    </nav>
</div>

@endsection