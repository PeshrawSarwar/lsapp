@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col col-sm-12">
        <h1 class="text-info">Edit Post</h1>
    </div>
</div>
<div class="row">
    <div class="col col-sm-12">
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title', ['class' => 'text-danger'])}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body', 'Body', ['class' => 'text-danger'])}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image', ['class' => 'btn btn-primary'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

    </div>

</div>
   
    
    


    
@endsection