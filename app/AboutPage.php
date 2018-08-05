<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    protected $table = 'about_content_page';
    protected $fillable = ['name','main_content'];
    protected $guarded = ['id','created_at','updated_at'];
}
