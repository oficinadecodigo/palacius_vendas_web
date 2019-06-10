<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pedido_items.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:27:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class PedidoItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('pedido_items',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->float('quantidade');
        
        $table->float('percentual_desconto');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('pedido_id')->unsigned()->nullable();
        $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        
        $table->integer('produto_id')->unsigned()->nullable();
        $table->foreign('produto_id')->references('id')->on('produtos')->onDelete('cascade');
        
        
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
        Schema::drop('pedido_items');
    }
}
