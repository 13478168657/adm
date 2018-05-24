<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods_columns', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',64)->comment('栏目名称');
            $table->string('sort',64)->comment('权重');
            $table->tinyInteger('status')->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('goods_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',64)->comment('类别名称');
            $table->string('sort',64)->comment('权重');
            $table->tinyInteger('status')->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('goods_price_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',64)->comment('类别名称');
            $table->string('sort',64)->comment('权重');
            $table->tinyInteger('status')->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('goods_column_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',64)->comment('标题');
            $table->string('sort',64)->comment('');
            $table->tinyInteger('status',64)->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('goods_category_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',64)->comment('标题');
            $table->string('sort',64)->comment('');
            $table->tinyInteger('status',64)->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('goods_price_articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',64)->comment('标题');
            $table->string('sort',64)->comment('');
            $table->tinyInteger('status',64)->comment('权重');
            $table->timestamps();
            $table->softDeletes();
        })
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('goods_categories');
    }
}
