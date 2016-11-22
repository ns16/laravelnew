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
            </thead>
            <tbody>
                @foreach ($forms as $form)
                    <tr>
                        <td>{{ $form->id }}</td>
                        <td>{{ $form->title }}</td>
                        <td>{{ $form->body }}</td>
                        <td>
                            <a href="{{ action('FormController@update', ['id' => $form->id]) }}" class="btn btn-default">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            </a>
                            <a href="{{ action('FormController@delete', ['id' => $form->id]) }}" class="btn btn-default">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $forms->render() }}
    </div>
@endsection
