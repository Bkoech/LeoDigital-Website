<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\DB;

use App\Models\Portfolio;
use App\Models\PortfolioCategory;
use App\Models\Client;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy("rgt")->get();

        $portfolios = Portfolio::where('status', 'PUBLISHED')->orderBy('date', "desc")->paginate(24);

//        if($request->ajax()) {
//            return [
//                'portfolios' => view('portfolio_ajax')->with(compact('portfolios'))->render(),
//                'next_page' => $portfolios->nextPageUrl()
//            ];
//        }
        $portfoliocategorys = PortfolioCategory::all();
        
        return view('portfolio', compact('portfolios', 'portfoliocategorys', 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portfolios = Portfolio::where('slug', $id)->first();
        $portfoliocategorys = PortfolioCategory::all();
        
        return view('portfolio_single', compact('portfolios', 'portfoliocategorys'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function test(){
        return view('portfolio_single');
    }

}
