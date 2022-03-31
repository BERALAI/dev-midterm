<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('invoice')->nullable()->unique();
            $table->string('name')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->datetime('date_purchased')->nullable();
            $table->longText('notes_history')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
