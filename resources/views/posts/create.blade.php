<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
      <h1>Blog Name</h1>
        <form action="/" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <div class='form-group'>
                    <input type="text" class='form-control form-width-md' name="post[title]" placeholder="タイトル"/>
                </div>
            </div>
            
            <div class="synopsis">
                <h2>あらすじ</h2>
                <textarea name="post[synopsis]" placeholder="あらすじ"></textarea>
            </div>
            
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="本文"></textarea>
            </div>
                   
            <div class="category">
                <h2>カテゴリ</h2>
       
    <TR>
    <TD><select name="post[category]">
        <option value="チャリ旅！">チャリ旅！
        <option value="旅飯">旅飯
        <option value="その他">その他
    </select></TD>
    </TR>
            
            
            
            <div class="image">
                <input type="file" name="image">
            </div>
            </div>
            <input type="submit" class='btn btn-success btn-lg' value="投稿する"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
</body>
</html>