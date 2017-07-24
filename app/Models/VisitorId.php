<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VisitorId extends Model
{

    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */

    protected $table = 'visitors_id';
    protected $primaryKey = 'id';
    public $timestamps = true;
    // protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];
    protected $fillable = ['visitor'];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function addVisitorId( $id )
    {
        $i = self::where('visitor',$id)->first();
        if(!isset($i->visitor))
        {
            $i = new self();
            $i->visitor = $id;
            $i->save();
        }
        // DB::table('visitors_id')->insert([
            // 'visitor' => $id,
            // 'created_at' =>
        // ]);
    }

    public static function dailyCountVisitorId($number)
    {
        $i = self::select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as views'))
                  ->groupBy('date')
                  ->orderBy('date', 'desc')
                  ->limit($number)
                  ->get();
        return $i->sortBy('date');
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

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
