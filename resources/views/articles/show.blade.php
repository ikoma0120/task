@extends('layout')

@section('content')

@if ($errors->any())
<ul class="alert alert-danger">
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
@endif

<h1>{{ $article->title }}</h1>

<hr/>

<article>
<div class="body">{{ $article->body }}</div>
</article>

@unless ($article->tags->isEmpty())
<h5>Tags:</h5>
<ul>
@foreach($article->tags as $tag)
<li>{{ $tag->name }}</li>
@endforeach
</ul>
@endunless

@if (Auth::check())
<br/>
{!! link_to(route('articles.edit', [$article->id]), '編集', ['class' => 'btn btn-primary']) !!}
<br/>
<br/>
{!! delete_form(['articles', $article->id]) !!}
@endif

<hr/>

<h3>コメント一覧</h3>

<hr/>

@foreach($article->comment as $comment)
<p><strong>投稿者 : {{ $comment->commenter }}</strong><br/>
コメント : {{ $comment->comment }}</p>
@endforeach

<hr/>

{{-- Form::open(['url' => 'comments']) --}}
{!! Form::open(['route' => 'comments.store']) !!}
<div class="form-group">
{!! Form::label('commenter', '投稿者:') !!}
{!! Form::text('commenter', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::label('commnet', 'コメント:') !!}
{!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

{!! Form::hidden('article_id', $article->id) !!}
<button type="submit" class="btn btn-primary">投稿</button>

@stop
