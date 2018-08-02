<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadFiles extends Model
{
    protected $table = 'download_files';
    protected $fillable = ['page_id','page_type','old_filename','ext','url'];
    protected $guarded = ['id','created_at','updated_at'];
}
