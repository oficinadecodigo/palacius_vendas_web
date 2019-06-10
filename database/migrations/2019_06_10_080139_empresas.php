<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Empresas.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:01:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Empresas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('empresas',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->String('Nome');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('empresas');
    }
}
