<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanics extends Model
{
		public function orders()
	{
		return $this->hasOne('App\Orders', 'mechanic_id');
	}


		public function workplaces()
	{
		return $this->belongsTo('App\Work_places');
	}


    use HasFactory;
}
