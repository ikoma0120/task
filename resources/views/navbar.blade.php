<nav class="navbar navbar-default">
<div class="container">
<div class="navbar-header">

<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
...
</button>

<a class="navbar-brand" href="/">掲示板 : 生駒 (課題)</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">

@if (Auth::guest())
<li><a href="/auth/login">ログイン</a></li>
<li><a href="/auth/register">アカウント作成</a></li>
@else

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
{{ Auth::user()->name }}
<span class="caret"></span>
</a>
<ul class="dropdown-menu" role="menu">
<li><a href="/auth/logout">ログアウト</a></li>
</ul>
</li>
@endif
</ul>
</div>
</div>
</nav>
