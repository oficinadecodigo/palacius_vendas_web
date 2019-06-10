<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:21:43pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pedido extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'pedidos';

	
	public function cliente()
	{
		return $this->belongsTo('App\Cliente','cliente_id');
	}

	
	public function filial()
	{
		return $this->belongsTo('App\Filial','filial_id');
	}

	
}
