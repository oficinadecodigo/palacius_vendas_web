<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:05:34pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Cliente extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'clientes';

	
	public function empresa()
	{
		return $this->belongsTo('App\Empresa','empresa_id');
	}

	
}
