<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Empresa.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:01:39pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Empresa extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'empresas';

	
}
