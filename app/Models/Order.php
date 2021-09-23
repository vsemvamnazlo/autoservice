<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Order extends Model
{
    public function client()
	{
		return $this->belongsTo(Client:class);
	}


		public function mechanic()
	{
		return $this->belongsTo(Mechanic::class);
	}
}
