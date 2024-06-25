<?php

namespace App\Models\Marketopia;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class MarketopiaContinent extends  Model implements TranslatableContract
{

    use Translatable; // 2. To add translation methods
    use HasFactory;
    public $guarded = ['id'];

    public $translatedAttributes = ['name'];

    // translation relationship 
    public function continent_translations()
    {
        return $this->hasMany(MarketopiaCountryTranslation::class, 'marketopia_continent_id');
    }

}
