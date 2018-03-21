<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_category', function (Blueprint $table) {
            $table->increments('category_id')->comment('自增列');
            $table->integer('category_pid')->comment('父级ID');
            $table->string('category_name', 20)->default('')->comment('分类名称');
            $table->string('category_path', 20)->default('')->comment('分类路径');
            $table->string('category_tag', 20)->default('')->comment('分类标签');
            $table->integer('category_level')->default(1)->comment('分类层级');
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
        Schema::dropIfExists('content_category');
    }
}
