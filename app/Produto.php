<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Produto.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:25:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Produto extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'produtos';

	
}
