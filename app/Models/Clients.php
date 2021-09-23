<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
	public function orders()
	{
		return $this->hasOne('App\Orders', 'client_id');
	}

    use HasFactory;
}
