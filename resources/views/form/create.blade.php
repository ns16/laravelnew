@extends('layouts.base')

@section('title')
    Create form
@endsection

@section('content')
    <div class="panel-body">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ action('FormController@createPost') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title" class="col-sm-3 control-label">Title</label>
                <div class="col-sm-6">
                    <input id="title" class="form-control" type="text" name="title">
                </div>
            </div>

            <div class="form-group">
                <label for="body" class="col-sm-3 control-label">Body</label>
                <div class="col-sm-6">
                    <textarea id="body" class="form-control" name="body" rows="5"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </div>
        </form>
    </div>
@endsection
