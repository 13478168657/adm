<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleCount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_click_count', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->comment('文章id');
            $table->integer('click_num')->nullable()->comment('点击量');
            $table->string('ip',64)->nullable()->comment('访问ip');
            $table->dateTime('visit_time')->comment('访问时间');
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
        Schema::dropIfExists('article_click_count');
    }
}
