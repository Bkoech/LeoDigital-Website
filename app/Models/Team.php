<?php

namespace App\Models;

use App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Team extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    protected $fillable = ['title', 'content', 'photo', 'status', 'lang'];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function getLocaleTeam($id) {
        $lang = App::getLocale();

        $team = DB::table('teams')
            ->where('id', '=', $id)
            ->where('lang', '=', $lang)
            ->take(1)
            ->get();

        $team = reset($team);

        return $team;
    }

    /**
     * Возвращает список продуктов по локале
     * @return mixed
     */
    public static function getLocaleTeams() {
        $lang = App::getLocale();

        $teams = DB::table('teams')
            ->where('lang', '=', $lang)
            ->get();

        return $teams;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopePublished($query)
    {
        return $query->where('status', 'PUBLISHED')
                    ->where('date', '<=', date('Y-m-d'))
                    ->orderBy('date', 'DESC');
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    // The slug is created automatically from the "title" field if no slug exists.
    public function getSlugOrTitleAttribute()
    {
        if ($this->slug != '') {
            return $this->slug;
        }

        return $this->title;
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
