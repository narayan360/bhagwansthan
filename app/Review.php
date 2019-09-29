<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $attributes = [
	'status' => 1,
	];

	public function country()
	{
		return $this->belongsTo('\App\Country');
	}
	public function scopeActive($query)
	{
		return $query->where('status', 1);
	}

	public function image($size = '300x300')
	{
		if($this->image){
			$image = public_path('uploads/reviews/' . $this->image);
			if (file_exists($image)) {
				return url('uploads/reviews/' . $size . '/' . $this->image);
			}else{
				return asset('images/' . $size .'icons-user.png');
			}
		}
	}

}
