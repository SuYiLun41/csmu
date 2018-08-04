<?php

namespace App\Http\Controllers\Admin;

use App\ArticleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    //文章類別
    public function article_type(){
        $lists = ArticleType::all();
        return view('admin.article.type_index',compact('lists'));
    }
    public function article_type_create(){
        return view('admin.article.type_create');
    }
    public function article_type_store(Request $request){
        $new = new ArticleType();
        $new -> type_name = $request -> type_name;
        $new ->save();

        return redirect(route('admin.article_type_index'))->with('message','新增成功');
    }
    public function article_type_edit($id){
        $article_type = ArticleType::find($id);
        return view('admin.article.type_edit',compact('article_type'));
    }
    public function article_type_update($id,Request $request){
        $list = ArticleType::find($id);
        $list -> type_name = $request -> type_name;
        $list ->save();

        return redirect(route('admin.article_type_index'))->with('message','修改成功');
    }
    public function article_type_delete($id,Request $request){
        $list = ArticleType::find($id);
        dd("最後完成");
    }

    //文章
    public function article(){

    }
    public function article_create(){

    }
    public function article_store(){

    }
    public function article_edit(){

    }
    public function article_update(){

    }
    public function article_delete(){

    }
}
