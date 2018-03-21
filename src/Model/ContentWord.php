<?php

namespace Loid\Module\Content\Model;

use Illuminate\Database\Eloquent\Model;

class ContentArticleWord extends Model
{
    protected $table = 'content_article_word';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
