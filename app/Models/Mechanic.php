<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\WorkPlace;

class Mechanic extends Model
{
	use HasFactory;
	public $timestamps = false;

    public function order()
	{
		return $this->hasOne(Order::class);
	}

		public function workplace()
	{
		return $this->belongsTo(WorkPlace::class);
	}
}