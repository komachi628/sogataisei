<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary;


class PostController extends Controller
{
    
    //投稿フォーム
    public function create()
    {
    return view('posts.create');
    }
    
    //投稿フォーム保存
    public function store(Request $request, Post $post)
        {
        $input = $request['post'];
        if($request->file('image')){ //画像ファイルが送られた時だけ処理が実行される
            $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image' => $image];
        }
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
        }
        
        //それぞれの記事ページにとぶ
    public function show(Post $post)
        {
            return view('article.article_tempre')->with(['post'=>$post]);
        }
        //トップページ　一覧取得
        public function new_main(Post $post)
        {
            return view('article.new_main')->with(['post'=>$post->get()]);
        }
        
        public function tyaritabi(Post $post)
        {
            return view('layouts.tyaritabi')->with(['post'=>$post->get()]);
        }
        
        public function tabimeshi(Post $post)
        {
            return view('layouts.tabimeshi')->with(['post'=>$post->get()]);
        }
        
        public function article_list(Post $post)
        {
            return view('layouts.article_list')->with(['post'=>$post->get()]);
        }
        
      
}