@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin/datatables.min.css')}}">
    <style>
        .btn-edit.active , .edit-input , .btn-confirm ,.btn-cancel{
            display: none !important;
        }

        .edit-input.active , .btn-confirm.active ,.btn-cancel.active{
            display: inline-block !important;
        }

    </style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">文章類別</h3>
                </div>
                <div class="panel-body">
                    <button data-toggle="collapse" data-target="#create" class="btn btn-primary">新增類別</button>

                    <div id="create" class="collapse panel">
                        <div class="panel-body">
                            <form class="form-horizontal" action="{{route('admin.article_type_store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="type_name" class="col-xs-2 control-label">類別名稱</label>
                                    <div class="col-xs-9">
                                        <input type="text" class="form-control" id="type_name" name="type_name" required>
                                    </div>
                                    <button type="submit" class="btn btn-success">新增</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>類別名稱</th>
                            <th>功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $list)
                            <tr>
                                <td><span class="show-span" data-typeid="{{$list->id}}">{{$list->type_name}}</span>
                                    <input class="form-control edit-input" type="text" name="type_name" value="{{$list->type_name}}" data-typeid="{{$list->id}}"></td>
                                <td width="170">
                                    <button class="btn btn-sm btn-success btn-edit" data-typeid="{{$list->id}}">編輯</button>
                                    <button class="btn btn-sm btn-danger btn-delete" data-typeid="{{$list->id}}" data-listid="{{$list->id}}">刪除</button>
                                    <form class="delete-form" action="{{route('admin.article_type_delete',$list->id)}}" method="POST" style="display: none;" data-listid="{{$list->id}}">
                                        {{ csrf_field() }}
                                    </form>

                                    <button class="btn btn-sm btn-success btn-confirm" data-typeid="{{$list->id}}">確認送出</button>
                                    <button class="btn btn-sm btn-danger btn-cancel" data-typeid="{{$list->id}}">取消</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    <script src="{{asset('js/admin/datatables.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable({
                "order": [[0,'asc']]
            });
        } );

        $('.btn-delete').click(function(){
            var listid = $(this).data("listid");
            if (confirm('確認是否刪除此類別？\n注意!隸屬該類別的文章也將刪除。')){
                event.preventDefault();
                $('.delete-form[data-listid="' + listid + '"]').submit();
            }
        });

        $('.btn-edit').click(function () {
            var type_id = $(this).data("typeid");
            $('.btn-edit[data-typeid="' + type_id + '"]').addClass('active');
            $('.edit-input[data-typeid="' + type_id + '"]').addClass('active');
            $('.btn-confirm[data-typeid="' + type_id + '"]').addClass('active');
            $('.btn-cancel[data-typeid="' + type_id + '"]').addClass('active');
            $('.show-span[data-typeid="' + type_id + '"]').addClass('hidden');
            $('.btn-delete[data-typeid="' + type_id + '"]').addClass('hidden');
        });

        $('.btn-cancel').click(function () {
            var type_id = $(this).data("typeid");

            $('.btn-edit[data-typeid="' + type_id + '"]').removeClass('active');
            $('.edit-input[data-typeid="' + type_id + '"]').removeClass('active');
            $('.btn-confirm[data-typeid="' + type_id + '"]').removeClass('active');
            $('.btn-cancel[data-typeid="' + type_id + '"]').removeClass('active');
            $('.show-span[data-typeid="' + type_id + '"]').removeClass('hidden');
            $('.btn-delete[data-typeid="' + type_id + '"]').removeClass('hidden');
        });

        $('.btn-confirm').click(function () {
            var type_id = $(this).data("typeid");

            $('.btn-edit[data-typeid="' + type_id + '"]').removeClass('active');
            $('.edit-input[data-typeid="' + type_id + '"]').removeClass('active');
            $('.btn-confirm[data-typeid="' + type_id + '"]').removeClass('active');
            $('.btn-cancel[data-typeid="' + type_id + '"]').removeClass('active');
            $('.show-span[data-typeid="' + type_id + '"]').removeClass('hidden');
            $('.btn-delete[data-typeid="' + type_id + '"]').removeClass('hidden');

            //get data
            var type_name=$('.edit-input[data-typeid='+type_id+']').val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/admin/article_type/update/"+type_id,
                timeout: 5000,
                data: {type_id:type_id,type_name:type_name},
                success: function (data) {
                    console.log(data);
                    $('.show-span[data-typeid="' + type_id + '"]').text(type_name);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    if (textStatus === "timeout") {
                        alert('目前系統異常或忙碌中，請稍後再試。');
                    } else {
                        alert('目前系統異常或忙碌中，請稍後再試。');
                    }
                }
            }, "json");
        });
    </script>
@endsection