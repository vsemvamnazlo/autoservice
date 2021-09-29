<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkPlace extends Model
{
	use HasFactory;
	public $timestamps = false;

    public function building()
	{
		return $this->belongsTo(Building::class);
	}
}