@extends('layouts.app')
@section('title', 'ユーザー詳細')
@section('content')
<h1>{{$user->name}}</h1>
<p>{{$user->email}}</p>
@foreach ($user->groups as $group)
  <h4>{{$group->name}}</h4>
  @foreach ($group->shops as $shop)
    <h5>{{$shop->name}}</h5>
    @foreach ($shop->customers as $customer)
      <h6>{{$customer->name}}</h6>
    @endforeach
    <hr>
  @endforeach
  <hr>
@endforeach
<br><br>
<a href="/users">一覧に戻る</a>
@endsection
