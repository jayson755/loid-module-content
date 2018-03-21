<?php

namespace Loid\Module\Content\Model;


use Illuminate\Database\Eloquent\Model;

class ContentArticle extends Model
{
    
    protected $table = 'content_article';
    
    public $primaryKey = 'article_id';
    
    public $timestamps = true;
}
