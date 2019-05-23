<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrimeraMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('category_id');
          $table->string('name');
          $table->string('image');
          $table->decimal('price', 20, 2)->default(0);
          $table->text('description')->nullable();
          $table->string('token');
          $table->timestamps();
      });

      Schema::create('cart', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('user_id');
          $table->integer('product_id');
          $table->integer('amount');
          $table->timestamps();
      });

      Schema::create('categories', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
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
        //
    }
}
