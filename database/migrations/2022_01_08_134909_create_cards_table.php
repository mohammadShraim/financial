<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('serial', 255)->index();
            $table->unsignedTinyInteger('type');
            $table->boolean('status')->default(true);
            $table->float('price');
            $table->foreignId('point_of_sale_id')->constrained('point_of_sales')->cascadeOnDelete();
            $table->boolean('refund')->default(false);
            $table->unsignedBigInteger('old_id')->nullable();
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
        Schema::dropIfExists('cards');
    }
}
