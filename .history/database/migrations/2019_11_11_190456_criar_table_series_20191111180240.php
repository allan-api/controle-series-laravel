<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTableSeries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(/*table: */'series', function (Blueprint $table) {
            $table->string(/*column:*/ 'nome', 255 /*,lenght:*/);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // remove a tabela
        Schema::drop(/*table:*/ 'series');
    }
}
