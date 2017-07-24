<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VisitorIp extends Model
{

    /*
   |--------------------------------------------------------------------------
   | GLOBAL VARIABLES
   |--------------------------------------------------------------------------
   */

    protected $table = 'visitors_ip';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    public static function addVisitorIp( $id )
    {
        $i = self::where('visitor', $id)->first();
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

    public static function dailyCountVisitorIp($number)
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
