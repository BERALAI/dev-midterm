<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('sales_email')->nullable();
            $table->string('sales_phone_number')->nullable();
            $table->string('tech_support_email')->nullable();
            $table->string('tech_support_number')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
