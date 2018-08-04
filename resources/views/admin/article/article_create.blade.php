@extends('layouts.app')
@section('css')
    <link href="{{asset('css/admin/summernote.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/admin/datepicker.min.css')}}" rel="stylesheet">
@endsection
@section('content')
<div class="container form-horizontal">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">文章類別-新增</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('admin.article_store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="article_type_id" class="col-xs-2 control-label">類別名稱</label>
                            <div class="col-xs-10">
                                <select name="article_type_id" id="article_type_id" class="form-control" required>
                                    <option value="" style="display: none;" selected>請選擇類別名稱</option>
                                    @foreach($type_lists as $type)
                                        <option value="{{$type->id}}">{{$type->type_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title" class="col-xs-2 control-label">文章標題</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date" class="col-xs-2 control-label">日期</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="date" name="date" required data-toggle="datepicker">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="main_content" class="col-xs-2 control-label">內容</label>
                            <div class="col-xs-10">
                                <textarea class="summernote" id="main_content" name="main_content" required></textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label for="upload_files" class="col-xs-2 control-label">附件上傳</label>
                            <div class="col-xs-10">
                                <input type="file" class="form-control" id="upload_files" name="upload_files[]" multiple>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group">
                            <div class="col-xs-12 text-center">
                                <button type="submit" class="btn btn-success">新增</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('js/admin/summernote.min.js')}}"></script>
    <script src="{{asset('js/admin/summernote-zh-TW.js')}}"></script>
    <script src="{{asset('js/admin/datepicker.min.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            $('.summernote').summernote({
                toolbar: [
                    ['style', ['style']],
                    ['fontsize', ['fontsize']],
                    ['font', ['bold', 'italic', 'underline', 'clear']],
                    ['fontname', ['fontname']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'hr']],
                    ['view', ['fullscreen', 'codeview']],
                    ['help', ['help']]
                ],
                height: 400,
                lang: 'zh-TW',
                fontNames: [
                    'sourcehansans-tc','Microsoft JhengHei', 'Heiti TC', 'LiHei Pro', 'Gotham', 'Helvetica Neue', 'Helvetica', 'Arial', 'sans-serif'
                ],
                callbacks: {
                    onImageUpload: function(files) {
                        url = $(this).data('upload'); //path is defined as data attribute for  textarea
                        for(var i = files.length - 1; i >= 0; i--) {
                            sendFile(files[i], this);
                        }
                    }
                }
            });

            function sendFile(file, editor, welEditable) {
                data = new FormData();
                data.append("file", file);
                $.ajax({
                    data: data,
                    type: "POST",
                    url: "{{route('admin.article_img_upload')}}",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        $('.summernote').summernote('editor.insertImage', url, function ($image) {
                            $image.css('max-width', '100%');
                        });
                    },
                });
            }
        });
        $('[data-toggle="datepicker"]').datepicker({
            format: 'yyyy-mm-dd'
        });
    </script>
@endsection