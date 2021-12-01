<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titlequotes');
            $table->string('slugquotes');
            $table->text('contentquotes');
            $table->text('thumbnailsquotes');
            
            $table->softdeletes();
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
        Schema::dropIfExists('quotes_packages');
    }
}
