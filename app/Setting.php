<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public function scopeOfValue($query, $title)
    {
        $setting = $query->where('title', $title)->first();
        return $setting ? ($setting->value ? $setting->value : '&nbsp;') : $title;
    }

    public static function getLogo($default = 'images/logo.png')
    {
        $setting = Setting::whereTitle('logo')->first();
        if ($setting) {
            return asset('uploads/logo/' . $setting->value);
        } else {
            return asset($default);
        }
    }
}
