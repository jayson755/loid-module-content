<?php

namespace Loid\Module\Content\Model;

use Illuminate\Database\Eloquent\Model;

class ContentArticleImgs extends Model
{
    protected $table = 'content_article_imgs';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
