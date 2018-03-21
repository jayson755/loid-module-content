<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_article', function (Blueprint $table) {
            $table->increments('article_id')->comment('自增列');
            $table->string('article_title', 50)->comment('标题');
            $table->integer('article_category')->comment('文章类别');
            $table->string('article_summary', 200)->comment('简介');
            $table->string('article_template', 10)->default('word')->comment('文章类型 word：文字；imgs:相册');
            $table->dateTime('article_pub_time')->comment('上线时间');
            $table->string('article_if_pub', 10)->default('pass')->comment('文章状态 pass:上线;wait_auth:待上线;');
            $table->string('article_flag', 20)->default('')->comment('文章标签');
            $table->integer('article_comment_num')->default(0)->comment('评论数');
            $table->integer('article_hits')->default(0)->comment('点击数');
            $table->timestamps();
            $table->softDeletes();
            $table->index('article_category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_article');
    }
}
