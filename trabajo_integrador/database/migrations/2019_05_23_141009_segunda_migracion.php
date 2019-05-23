<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SegundaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('cart', function (Blueprint $table) {
          $table->unsignedInteger('user_id');
          $table->unsignedInteger('product_id');

      });

      //el table es para cambiar la tabla.

      Schema::table('products', function (Blueprint $table) {
          $table->unsignedInteger('category_id');

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
