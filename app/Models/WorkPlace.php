<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasFactory;

class WorkPlace extends Model
{
    public function building()
	{
		return $this->belongsTo(Building::class);
	}
}
