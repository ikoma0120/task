<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests\CommentRequest;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{

  protected $comments;

     public function __construct(Comment $comments)
     {
         $this->comments = $comments;
     }



  public function store(CommentRequest $request) {

    $data = [
         'comment' => $request->get('comment'),
         'commenter' => $request->get('commenter'),
         'article_id' => $request->get('article_id')
     ];
     $this->comments->create($data);


    \Session::flash('flash_message', 'コメントを追加しました。');


      return redirect()->route('articles.show',[$request->get('article_id')]);
  }
}
