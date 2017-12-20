@extends('layout')

@section('content')

<h1>スレッド作成</h1>

<hr/>

@include('errors.form_errors')

{{-- Form::open(['url' => 'articles']) --}}
{!! Form::open(['route' => 'articles.store']) !!}
@include('articles.form', ['published_at' => date('Y-m-d'), 'submitButton' => 'スレッド作成'])
{!! Form::close() !!}

@stop
