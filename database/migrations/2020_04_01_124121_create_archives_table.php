<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archives', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->increments('id');
            $table->unsignedInteger('inventory_id');
            $table->string('name', 50);
            $table->string('detail', 150);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('inventory_id')->references('id')
            ->on('inventories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archives');
    }
}
