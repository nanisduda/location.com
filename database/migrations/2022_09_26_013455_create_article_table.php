<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('标题');
            $table->string('category')->comment('分类');
            $table->string('author')->comment('作者');
            $table->text('cover')->comment('封面');
            $table->text('content')->comment('内容');
            $table->string('tags')->comment('标签（ID）');
            $table->unsignedInteger('hot_desc')->default(0)->comment('热度排序（降序）');
            $table->unsignedInteger('comment_cnt')->default(0)->comment('评论数');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
};
