<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_comment', function (Blueprint $table) {
            $table->increments('comment_id')->comment('自增列');
            $table->text('comment_content')->comment('评论内容');
            $table->integer('article_id')->comment('文章id');
            $table->char('origin_ip', 15)->comment('来源ip');
            $table->string('origin_nickname', 50)->comment('发布人昵称');
            $table->string('origin_email', 50)->comment('发布人邮箱');
            $table->string('origin_url', 10)->comment('发布人网址');
            $table->string('comment_auth', 3)->default('on')->comment('状态:on/off');
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
        Schema::dropIfExists('content_comment');
    }
}
