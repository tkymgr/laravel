@extends('layouts.app')

@section('content')
<div class="container-fruid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <nav class="row justify-content-between">
            <div class="col-auto">{{ __('顧客登録') }}</div>
            <div class="col-1 clearfix">
              <div class="float-right"><a href="/"><i class="fas fa-search"></i></a></div>
            </div>
          </nav>
        </div>
        <div class="card-body">
          <from action="/">
            <div class="form-group">
              <div class="input-group align-items-center row">
                <div class="col-sm-2"><lable>お名前</lable></div>
                <div class="col-sm-10"><input type="text" class="form-control ml-3"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group align-items-center row">
                <div class="col-sm-2"><lable>フリガナ</lable></div>
                <div class="col-sm-10"><input type="text" class="form-control ml-3"></div>
              </div>
            </div>
            <hr>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary btn-block">登録 (not yet)</button>
            </div>
          </from>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
