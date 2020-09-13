@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h2 class="is-size-4">New Article</h1>
            <form action="/articles" method="post">
            @include('articles.form', [
                'buttonText' => 'Create Project'
            ])
            </form>
            
        </div>
    </div>
@endsection

