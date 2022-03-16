<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complements', function (Blueprint $table) {
            $table->id();
            $table->string('parking')->default('non');
            $table->string('petitDej')->default('non');
            $table->string('bar')->default('non');
            $table->string('jardin')->default('non');
            $table->string('picine')->default('non');
            $table->string('terrasse')->default('non');
            $table->string('climatisation')->default('non');
            $table->string('plage')->default('non');
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
        Schema::dropIfExists('complements');
    }
}
