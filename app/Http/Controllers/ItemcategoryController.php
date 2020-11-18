<?php

namespace App\Http\Controllers;

use App\Itemcategory;
use Illuminate\Http\Request;

class ItemcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Itemcategory::with('items')->get();
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
     * @param  \App\Itemcategory  $itemcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Itemcategory $itemcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itemcategory  $itemcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Itemcategory $itemcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itemcategory  $itemcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itemcategory $itemcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itemcategory  $itemcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itemcategory $itemcategory)
    {
        //
    }
}
