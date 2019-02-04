<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
	public function regency()
	{
		return $this->hasOne(Regency::class, 'id', 'regency_id');
	}
}