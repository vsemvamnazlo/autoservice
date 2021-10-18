<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	use HasFactory;
	public $timestamps = false;

	protected $dates = [
		'start_at',
		'end_at'
	];

    public function client()
	{
		return $this->belongsTo(Client::class);
	}


		public function mechanic()
	{
		return $this->belongsTo(Mechanic::class);
	}
}