@extends ('layouts.common_layout')

@section('content')
      <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            
            <div class="synopsis">
                <h2>あらすじ</h2>
                <textarea name="post[synopsis]" placeholder="あらすじ"></textarea>
            </div>
            
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="本文"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
@endsection