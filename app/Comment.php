<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['commenter', 'comment', 'article_id'];

    public function articles() {
      return $this->belongsTo('App\Article');
    }
}
