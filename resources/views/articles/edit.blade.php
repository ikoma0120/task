@extends('layout')

@section('content')

<h1>スレッド編集 : {{ $article->title }}</h1>

<hr/>

@include('errors.form_errors')

{!! Form::model($article, ['method' => 'PATCH', 'url' => ['articles', $article->id]]) !!}
@include('articles.form', ['published_at' => $article->published_at->format('Y-m-d'), 'submitButton' => '編集内容を保存'])
{!! Form::close() !!}

@stop
