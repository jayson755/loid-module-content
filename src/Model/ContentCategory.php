<?php

namespace Loid\Module\Content\Model;

use Illuminate\Database\Eloquent\Model;

class ContentCategory extends Model
{
    protected $table = 'content_category';
    
    public $primaryKey = 'category_id';
    
    public $timestamps = true;
}
