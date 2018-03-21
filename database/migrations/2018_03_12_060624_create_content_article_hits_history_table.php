<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentArticleHitsHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_article_hits_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->default(0)->comment('文章ID');
            $table->char('hit_ip', 15)->comment('IP');
            $table->integer('user_id')->comment('用户');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('content_article_hits_history');
    }
}
