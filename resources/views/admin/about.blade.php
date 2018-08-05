@extends('layouts.app')

@section('content')
    <div class="container form-horizontal">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            系所介紹-{{$about_info->name}}
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{route('admin.about',$about_info->id)}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="main_content" class="col-xs-2 control-label">內容</label>
                                <div class="col-xs-10">
                                    <textarea name="main_content" id="main_content" rows="20" class="form-control">{{$about_info->main_content}}</textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="from-group">
                                <div class="col-xs-12 text-center">
                                    <button type="submit" class="btn btn-success">更新</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
