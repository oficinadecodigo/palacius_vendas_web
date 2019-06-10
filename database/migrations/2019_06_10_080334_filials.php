<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Filials.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:03:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Filials extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('filials',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->String('razao_social');
        
        $table->String('nome_fantasia');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('empresa_id')->unsigned()->nullable();
        $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        
        
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
        Schema::drop('filials');
    }
}
