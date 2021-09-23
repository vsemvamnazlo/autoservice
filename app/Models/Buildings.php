<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buildings extends Model
{
	public function workplaces()
	{
		return $this->hasOne('App\Work_places', 'building_id');
	}

    use HasFactory;
}
