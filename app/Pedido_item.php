<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pedido_item.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:27:52pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pedido_item extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'pedido_items';

	
	public function pedido()
	{
		return $this->belongsTo('App\Pedido','pedido_id');
	}

	
	public function produto()
	{
		return $this->belongsTo('App\Produto','produto_id');
	}

	
}
