<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_places extends Model
{
		public function buildings()
	{
		return $this->belongsTo('App\Buildings');
	}

    use HasFactory;
}
