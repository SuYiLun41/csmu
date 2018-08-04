<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownloadFiles extends Model
{
    protected $table = 'download_files';
    protected $fillable = ['page_id','page_type','old_filename','ext','url'];
    protected $guarded = ['id','created_at','updated_at'];

    #region page_type欄位數字代表意義
    /* 0->article */
    /* 1->about_content_page */
    /* 2->course_content_page */
    /* 3->english_content_page */
    /* 4->license_content_page */
    /* 5->sub_content_page */
    #endregion
}
