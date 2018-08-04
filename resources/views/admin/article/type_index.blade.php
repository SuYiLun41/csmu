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
                    <h3 class="panel-title">文章類別</h3>
                </div>
                <div class="panel-body">
                    <a class="btn btn-success" href="{{route('admin.article_type_create')}}">新增類別</a>
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
                                <td>{{$list->type_name}}</td>
                                <td width="170">
                                    <a class="btn btn-sm btn-success" href="{{route('admin.article_type_edit',$list->id)}}">編輯</a>
                                    <button class="btn btn-sm btn-danger" data-listid="{{$list->id}}">刪除</button>
                                    <form class="delete-form" action="{{route('admin.article_type_delete',$list->id)}}" method="POST" style="display: none;" data-listid="{{$list->id}}">
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
            if (confirm('確認是否刪除此類別？\n注意!隸屬該類別的文章也將刪除。')){
                event.preventDefault();
                $('.delete-form[data-listid="' + listid + '"]').submit();
            }
        });
    </script>
@endsection