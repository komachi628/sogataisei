@extends('layouts.common_layout')

@section('content')


  <div class="container">
    <div class='row'>
    <div class='col-md-4'>
       <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h4>記事一覧</h4>
          <p class="card-text text-truncate">
            これまでの軌跡
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                <a href='/article_list'>一覧を見る</a>
                </button>
            </div>
          </div>
        </div>
       </div>
    </div>
  </div>
  </div>
  

 <div class="container">
    <div class='row'>
    <div class='col-md-4'>
       <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h4>チャリ旅</h4>
          <p class="card-text text-truncate">
            男はゆく…ママチャリで！
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                <a href='/tyaritabi'>一覧を見る</a>
                </button>
            </div>
          </div>
        </div>
       </div>
    </div>
  </div>
  </div>
  
   <div class="container">
    <div class='row'>
    <div class='col-md-4'>
       <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <h4>旅飯</h4>
          <p class="card-text text-truncate">
            旅先でも簡単に作れる料理集
          </p>
          <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
              <button type="button" class="btn btn-sm btn-outline-secondary">
                <a href='/tabimeshi'>一覧を見る</a>
                </button>
            </div>
          </div>
        </div>
       </div>
    </div>
  </div>
  </div>

 
  
 
  @endsection