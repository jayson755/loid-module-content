<?php


Route::group(['prefix'=>'manage', 'middleware'=>['web', 'auth', \Loid\Frame\Middleware\MoudleInit::class]], function () {
    
    /*分类管理*/
    Route::get('content/category.html', Loid\Module\Content\Controllers\CategoryController::class.'@index')->name('content.category');
    
    /*文章管理*/
    Route::get('content/article.html', Loid\Module\Content\Controllers\ArticleController::class.'@index')->name('content.article');
    /*标签管理*/
    Route::get('content/tag.html', Loid\Module\Content\Controllers\TagController::class.'@index')->name('content.tag');
    /*评论管理*/
    Route::get('content/comment.html', Loid\Module\Content\Controllers\CommentController::class.'@index')->name('content.comment');
});