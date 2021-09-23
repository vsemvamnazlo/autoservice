<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Mechanic extends Model
{
    public function orders()
	{
		return $this->hasOne(Order::class);
	}


		public function workplace()
	{
		return $this->belongsTo(WorkPlace::class);
	}
}
