<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentArticleImgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_article_imgs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->comment('文章ID');
            $table->string('article_img', 255)->comment('图片地址');
            $table->string('article_intro', 255)->comment('图片描述');
            $table->integer('article_order')->comment('图片排序');
            $table->boolean('article_figure')->default(0)->comment('图片头图');
            $table->timestamps();
            $table->softDeletes();
            $table->index('article_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_article_imgs');
    }
}
