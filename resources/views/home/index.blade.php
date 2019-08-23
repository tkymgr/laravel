@extends('layouts.app')

@section('content')
<div class="container-fruid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <nav class="row justify-content-between">
            <div class="col-auto">{{ __('顧客リスト') }}</div>
            <div class="col-1 clearfix">
              <div class="float-right"><a href="/regist"><i class="fas fa-user-plus"></i></a></div>
            </div>
          </nav>
        </div>
        <div class="card-body">
          <form method="GET" role="search">
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="keyword" value="{{ $keyword}}" placeholder="{{ __('キーワードを入力') }}">
              <div class="input-group-append">
                <button class="btn btn-secondary" type="submit">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
            <div class="input-group mb-3">
              <select class="js-data-example-ajax form-control"><option>名前順</option></select>
            </div>
          </form>
          <hr>
          @foreach($customers as $customer)
            <div class="card">
              <div class="card-body">
              {{ $customer->name }}
              <i class="fas fa-book-open"></i>
              </div>
            </div>
          @endforeach
          {{ $customers->appends(['keyword' => $keyword])->onEachSide(1)->links("pagination::custom") }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
