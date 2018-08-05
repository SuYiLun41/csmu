@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{asset('css/admin/datatables.min.css')}}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">文章列表</h3>
                </div>
                <div class="panel-body">
                    <a class="btn btn-success" href="{{route('admin.article_create')}}">新增文章</a>
                    <hr>
                    <table id="table" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>類別</th>
                            <th>標題</th>
                            <th>功能</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($lists as $list)
                            <tr>
                                <td>{{$list->article_type->type_name}}</td>
                                <td>{{$list->title}}</td>
                                <td width="170">
                                    <a class="btn btn-sm btn-success" href="{{route('admin.article_edit',$list->id)}}">編輯</a>
                                    <button class="btn btn-sm btn-danger" data-listid="{{$list->id}}">刪除</button>
                                    <form class="delete-form" action="{{route('admin.article_delete',$list->id)}}" method="POST" style="display: none;" data-listid="{{$list->id}}">
                                        {{ csrf_field() }}
                                    </form>
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

        $('.btn-danger').click(function(){
            var listid = $(this).data("listid");
            if (confirm('確認是否刪除此文章？')){
                event.preventDefault();
                $('.delete-form[data-listid="' + listid + '"]').submit();
            }
        });
    </script>
@endsection