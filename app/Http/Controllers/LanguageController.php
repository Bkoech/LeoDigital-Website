<?php

namespace App\Http\Controllers;

use Cookie;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanguageController extends Controller
{
    /**
     * Утанавливает текущий язык
     */
    public function index(Request $request, $lang)
    {
        $url_array = array_slice(explode("/",url()->previous()),3);
        $url_array[0] = $lang;
        $comeback = implode('/',$url_array);
        if(!empty($lang) && array_key_exists($lang, config('app.locales'))) {
            Cookie::queue(Cookie::make('lang', $lang, 3600));
            return redirect($comeback);
        }
        return redirect('/');
    }

}