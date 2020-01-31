<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('product', function (Blueprint $table) {
            $table->charset = 'utf8';
$table->collation = 'utf8_bin';
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');
            $table->string('price');
            $table->string('description');
            $table->string('seller');
            $table->string('imagename');
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
        Schema::dropIfExists('product');
    }
}
