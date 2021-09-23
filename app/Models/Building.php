<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Building extends Model
{
    public function workplace()
	{
		return $this->hasOne(WorkPlace::class);
	}
}
