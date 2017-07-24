<?php

namespace App\Http\Controllers;

use Identify;
// use App\Http\Requests;
use Illuminate\Http\Request;
// use Illuminate\Routing\UrlGenerator;
// use Illuminate\Support\Facades\DB;
use App\Models\{Client, Project, Service, VisitorId, VisitorIp};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request ) 
    {
        VisitorId::addVisitorId(session()->getId());

        VisitorIp::addVisitorIp($request->ip());

        $clients = Client::orderBy("rgt")->get();

        $projects = Project::getProjects();

        $services = Service::getServices();

        // $browser = Identify::browser()->getName();
        
        return array_key_exists(request()->segment(1), config('app.locales')) ? view('home', compact('clients', 'projects', 'services')) : redirect('/'.config('app.locale'));
    }

    public static function ImpressionCount(Request $request)
    {
        $impre['useragent'] = $request->server('HTTP_USER_AGENT');
        $input['ip'] = $request->ip();
        return $input;
    }

}
