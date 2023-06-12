<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
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
        Schema::dropIfExists('categories');
    }
}

// Product::create([
//     'title'=>'judul 3',
//     'slug'=>'judul-3',
//     'desc'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam laborum deserunt eos et, quia odit accusantium neque facere minima repudiandae.',
//     'category_id' => '1',
//     'price' => '20.000'
// ])

