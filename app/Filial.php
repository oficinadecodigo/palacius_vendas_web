<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Filial.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:03:34pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Filial extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'filials';

	
	public function empresa()
	{
		return $this->belongsTo('App\Empresa','empresa_id');
	}

	
}
