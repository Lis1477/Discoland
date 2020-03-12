<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsignet();
            $table->integer('old_id')->unsignet()->unique();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->text('text')->nullable();
            $table->text('pretext')->nullable();
            $table->text('code')->nullable();
            $table->text('music_style')->nullable();
            $table->string('big_picture');
            $table->string('sm_picture');
            $table->float('price', 5, 2);
            $table->integer('in_stock')->unsignet();
            $table->integer('display')->unsignet()->default(1);
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
        Schema::dropIfExists('products');
    }
}
