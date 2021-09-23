<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
	public function clients()
	{
		return $this->belongsTo('App\Clients');
	}


	public function mechanics()
	{
		return $this->belongsTo('App\Mechanics');
	}

    use HasFactory;
}
