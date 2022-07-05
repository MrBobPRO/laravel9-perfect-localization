<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function translation($language = null)
    {
        if ($language == null) {
            $language = App::getLocale();
        }
        
        return $this->translations()->where('language', '=', $language)->first();
    }

    protected static function booted()
    {
        static::saved(function ($model) {
            $languages = Locale::all();

            foreach ($languages as $language) 
            {
                $model->translations()->create(['language' => $language->value]);
            }
        });
    }
}