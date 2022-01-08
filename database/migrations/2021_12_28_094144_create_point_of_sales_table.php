<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointOfSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_of_sales', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('lat');
            $table->string('lng');
            $table->unsignedTinyInteger('status')->default(\App\Models\PointOfSales\PointOfSale::$Suspended);
            $table->string('logo');
            $table->foreignId('rank_id')->constrained('ranks')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('point_of_sales');
    }
}
