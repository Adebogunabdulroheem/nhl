@extends('layouts.pages')

@section('title')
   Blog Post
@endsection

@section('page')
    Blog
@endsection

@section('content')

  <div class="container">
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title ')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
     <div class="form-group">
        {{Form::label('excerpt', 'Discription ')}}
        {{Form::textarea('excerpt', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::label('Body', 'Body ')}}
        {{Form::textarea('Body', '', ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Description'])}}
    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
  </div>
    
@endsection
