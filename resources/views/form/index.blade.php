@extends('layouts.base')

@section('title')
    Review forms
@endsection

@section('content')
    <div class="panel-body">
        <table class="table">
            <thead>
                <th>#</th>
                <th>Title</th>
                <th>Body</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <input class="form-control" type="text" name="title" form="form">
                    </td>
                    <td>
                        <input class="form-control" type="text" name="body" form="form">
                    </td>
                    <td>
                        <button class="btn btn-default" type="submit" name="submit" form="form">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </td>
                </tr>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->id }}</td>
                        <td>{{ $form->title }}</td>
                        <td>{{ $form->body }}</td>
                        <td>
                            <a href="{{ action('FormController@update', ['id' => $form->id]) }}" class="btn btn-default">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="{{ action('FormController@delete', ['id' => $form->id]) }}" class="btn btn-default">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <form id="form" class="hidden" action="{{ action('FormController@indexPost') }}" method="POST">
            {{ csrf_field() }}
        </form>

        {{ $forms->render() }}
    </div>
@endsection
