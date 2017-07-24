<?php

namespace App\Models;

use App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class PortfolioCategory extends Model
{
    use CrudTrait;
    use Sluggable, SluggableScopeHelpers;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'portfoliocategorys';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    // protected $hidden = [];
    // protected $dates = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'slug_or_name',
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function getLocalePortfolioCategory($id) {
        $lang = App::getLocale();

        $portfoliocategory = DB::table('portfoliocategorys')
            ->where('id', '=', $id)
            ->where('lang', '=', $lang)
            ->take(1)
            ->get();

        $portfoliocategory = reset($portfoliocategory);

        return $portfoliocategory;
    }

    /**
     * Возвращает список продуктов по локале
     * @return mixed
     */
    public static function getLocalePortfolioCategorys() {
        $lang = App::getLocale();

        $portfoliocategorys = DB::table('portfoliocategorys')
            ->where('lang', '=', $lang)
            ->get();

        return $portfoliocategorys;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    public function parent()
    {
        return $this->belongsTo('App\Models\PortfolioCategory', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Models\PortfolioCategory', 'parent_id');
    }

    public function portfolios()
    {
        return $this->hasMany('App\Models\Portfolio');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeFirstLevelItems($query)
    {
        return $query->where('depth', '1')
                    ->orWhere('depth', null)
                    ->orderBy('lft', 'ASC');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "name" field if no slug exists.
    public function getSlugOrNameAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->name;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
