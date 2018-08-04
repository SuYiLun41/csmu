<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $fillable = ['top','article_type_id','title','main_content','date','reading'];
    protected $guarded = ['id','created_at','updated_at'];

    public function article_type(){
       return $this->belongsTo('App\ArticleType','article_type_id');
    }

    public function download_files(){
        return $this->hasMany('App\DownloadFiles','page_id')->where('page_type',0);
    }
}
