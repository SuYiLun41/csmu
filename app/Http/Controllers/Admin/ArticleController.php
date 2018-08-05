<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\ArticleType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    //文章類別
    public function article_type(){
        $lists = ArticleType::all();
        return view('admin.article.type_index',compact('lists'));
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

        return $list;
    }
    public function article_type_delete($id,Request $request){
        $list = ArticleType::find($id);
        foreach ($list->articles as $article){
            foreach ($article->download_files as $file_info){
                File::delete( public_path().$file_info->url);
                $file_info->delete();
            }
            $article->delete();
        }
        $list->delete();
        return redirect(route('admin.article_type_index'))->with('message','刪除成功');
    }

    //文章
    public function article(){
        $lists = Article::all();
        return view('admin.article.article_index',compact('lists'));
    }
    public function article_create(){
        $type_lists = ArticleType::all();
        return view('admin.article.article_create',compact('type_lists'));
    }
    public function article_store(Request $request){
        $new = new Article();
        $new -> top = 0; //預設未置頂
        $new -> article_type_id = $request -> article_type_id;
        $new -> date = $request -> date;
        $new -> title = $request -> title;
        $new -> main_content = json_encode($request -> main_content);
        $new -> save();
        if($request->hasFile('upload_files'))
        {
            foreach ($request->file('upload_files') as $file){
              HomeController::file_upload($new->id,0,$file);
            }
        }

        return redirect(route('admin.article_index'))->with('message','新增成功');
    }
    public function article_edit($id){
        $type_lists = ArticleType::all();
        $article = Article::find($id);
        $article -> main_content = json_decode($article -> main_content);
        return view('admin.article.article_edit',compact('type_lists','article'));
    }
    public function article_update($id,Request $request){
        $value = Article::find($id);
        $value -> article_type_id = $request -> article_type_id;
        $value -> date = $request -> date;
        $value -> title = $request -> title;
        $value -> main_content = json_encode($request -> main_content);
        $value -> save();
        if($request->hasFile('upload_files'))
        {
            foreach ($request->file('upload_files') as $file){
                HomeController::file_upload($value->id,0,$file);
            }
        }

        return redirect(route('admin.article_index'))->with('message','更新成功');
    }
    public function article_delete($id,Request $request){
        $article = Article::find($id);
        foreach ($article-> download_files as $file_info){
            File::delete( public_path().$file_info->url);
            $file_info->delete();
        }
        $article->delete();
        return redirect(route('admin.article_index'))->with('message','刪除成功');
    }

    public function article_summernote_img_upload(Request $request)
    {
        $allowed = array("png", "jpg", "gif", "PNG", "JPG", "GIF","jpeg","JPEG");
        if($request->hasFile('file')){
            $file =  $request->file('file');
            $extension = $file->getClientOriginalExtension();
            if(!in_array($extension, $allowed)){
                echo '{"status":"檔案格式僅接受 png, jpg, gif, jpeg"}';
                exit;
            }

            $filename = $file->getFilename() . '.' . $extension;
            $destination = public_path() .'/img/article/';
            $file->move($destination,$filename);
            echo "/img/article/".$filename;
        }
        else
        {
            echo '{"status":"無檔案上傳"}';
            exit;
        }
        exit;
    }
}
