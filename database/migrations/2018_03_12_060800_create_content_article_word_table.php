<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentArticleWordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_article_word', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->comment('文章ID');
            $table->string('aritcle_edit_type', 10)->default('html')->comment('文本类型 html;markdown');
            $table->text('article_content')->comment('文章内容');
            $table->text('article_markdown')->comment('文章类容 markdown代码');
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
        Schema::dropIfExists('content_article_word');
    }
}
