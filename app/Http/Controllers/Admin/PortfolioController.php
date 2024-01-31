<?php

namespace App\Http\Controllers\Admin;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view("admin.index", compact("portfolios"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_portfolio = new Portfolio();
        $new_portfolio->title = $data["title"];
        $new_portfolio->description = $data["description"];
        $new_portfolio->thumb = $data["thumb"];
        $new_portfolio->save();
        return redirect()->route("admin.portfolios.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $new_portfolio = Portfolio::find($id);
        return view("admin.edit", compact("new_portfolio"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $portfolio = Portfolio::find($id);
        $portfolio->update($data);
        return redirect()->route("admin.portfolios.index");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::find($id);
        $portfolio->delete();
        return redirect()->route("admin.portfolios.index");
    }
}
