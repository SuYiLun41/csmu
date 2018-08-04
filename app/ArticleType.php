<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    protected $table = 'article_type';
    protected $fillable = ['type_name'];
    protected $guarded = ['id'];
    public $timestamps = false;
    public function articles(){
        return $this->hasMany('App\Article','article_type_id');
    }
}
