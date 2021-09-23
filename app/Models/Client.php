<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use HasFactory;

class Client extends Model
{
    public function order()
	{
		return $this->hasOne(Order::class);
	}
}
