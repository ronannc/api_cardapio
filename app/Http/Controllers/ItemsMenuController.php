<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemsMenuRequest;
use App\Http\Requests\UpdateItemsMenuRequest;
use App\Models\ItemsMenu;

class ItemsMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param \App\Http\Requests\StoreItemsMenuRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( StoreItemsMenuRequest $request )
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param \App\Models\ItemsMenu $itemsMenu
     *
     * @return \Illuminate\Http\Response
     */
    public function show( ItemsMenu $itemsMenu )
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ItemsMenu $itemsMenu
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( ItemsMenu $itemsMenu )
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateItemsMenuRequest $request
     * @param \App\Models\ItemsMenu                     $itemsMenu
     *
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateItemsMenuRequest $request, ItemsMenu $itemsMenu )
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ItemsMenu $itemsMenu
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( ItemsMenu $itemsMenu )
    {
        //
    }
}
