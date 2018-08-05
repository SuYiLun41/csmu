<?php

namespace App\Http\Controllers\Admin;

use App\DownloadFiles;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }


    //處理所有上傳檔案
    public static function file_upload($page_id,$page_type, $file)
    {
        $upload_folder = '';
        switch ($page_type)
        {
            case 0:
                $upload_folder = '/download_file/article/';
                break;
            case 1:
                $upload_folder = '/download_file/about/';
                break;
            case 2:
                $upload_folder = '/download_file/course/';
                break;
            case 3:
                $upload_folder = '/download_file/english/';
                break;
            case 4:
                $upload_folder = '/download_file/license/';
                break;
            case 5:
                $upload_folder = '/download_file/sub/';
                break;
            default:
                return redirect()->back()->with('message','上傳路徑錯誤!');
        }

        $allowed_extensions = ["png", "jpg","jpeg", "gif", "PNG", "JPG", "GIF","JPEG", "doc", "docx", "xls" . "xlsx", "pdf", 'DOC', "DOCX", "XLS", "XLSX", "PDF"];
        if ($file->getClientOriginalExtension() &&
            !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return redirect()->back()->with('message', '僅接受jpg, png, gif, jpeg, doc, docx, xls, xlsx, pdf格式檔案!');
        }
        $extension = $file->getClientOriginalExtension();
        $destinationPath = public_path() . $upload_folder;
        $original_filename = $file->getClientOriginalName();

        $filename = $file->getFilename() . '.' . $extension;
        $url = $upload_folder . $filename;

        $file->move($destinationPath, $filename);

        $value = new DownloadFiles();
        $value->page_id = $page_id;
        $value->page_type = $page_type;
        $value->old_filename = $original_filename;
        $value->ext = $extension;
        $value->url = $url;
        $value->save();
    }

    //刪除上傳檔案-Ajax
    public function file_delete(Request $request){
        if(isset($request->id))
        {
            $file = DownloadFiles::find($request->id);
            if($file)
            {
                File::delete(public_path().$file->url);
                $file -> delete();
                echo 'success';
            }
            else
            {
                echo 'fail';
            }
        }
        else
            echo 'fail';
        exit;
    }
}
