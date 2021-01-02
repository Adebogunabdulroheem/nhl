@extends('layouts.pages')

@section('title')
   Blog Post
@endsection

@section('page')
    Blog
@endsection

@section('content')

  <div class="container">
    
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title ')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('excerpt', 'Short Description ')}}
        {{Form::textarea('excerpt', $post->excerpt, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Short Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('Body', 'Body ')}}
        {{Form::textarea('Body', $post->Body, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Update', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

  </div>
    
@endsection