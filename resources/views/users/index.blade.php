@extends('layouts.app')
@section('title', 'ユーザー一覧')
@section('content')
  @foreach ($users as $user)
    <h4>{{$user->name}}</h4>
    <p>{{$user->email}}</p>
    <a href="/users/{{$user->id}}">詳細を表示</a>
    <hr>
  @endforeach
@endsection
