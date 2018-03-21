<?php

namespace Loid\Module\Content\Model;

use Illuminate\Database\Eloquent\Model;

class ContentTag extends Model
{
    protected $table = 'content_tag';
    
    public $primaryKey = 'flag_id';
    
    public $timestamps = true;
}
