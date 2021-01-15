<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projeto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projeto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->nullable(false);
            $table->date('inicio')->nullable(false);
            $table->date('termino')->nullable(false);
            $table->float('valor')->nullable(false);
            $table->integer('risco')->nullable(false);
            $table->string('participantes')->nullable(false);
    
    
            $table->timestamps();
            $table->softDeletes();
                                 });
        }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projeto');
    }
}
