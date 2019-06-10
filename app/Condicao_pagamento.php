<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Condicao_pagamento.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:19:37pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Condicao_pagamento extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'condicao_pagamentos';

	
}
