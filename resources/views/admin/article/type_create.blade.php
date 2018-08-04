@extends('layouts.app')
@section('css')
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
                    <form class="form-horizontal" action="{{route('admin.article_type_store')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="type_name" class="col-xs-2 control-label">類別名稱</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" id="type_name" name="type_name" required>
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
@endsection