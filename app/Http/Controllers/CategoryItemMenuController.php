<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryItemMenuRequest;
use App\Http\Requests\UpdateCategoryItemMenuRequest;
use App\Models\CategoryItemMenu;

class CategoryItemMenuController extends Controller
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
     * @param \App\Http\Requests\StoreCategoryItemMenuRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( StoreCategoryItemMenuRequest $request )
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param \App\Models\CategoryItemMenu $categoryItemMenu
     * @return \Illuminate\Http\Response
     */
    public function show( CategoryItemMenu $categoryItemMenu )
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\CategoryItemMenu $categoryItemMenu
     * @return \Illuminate\Http\Response
     */
    public function edit( CategoryItemMenu $categoryItemMenu )
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCategoryItemMenuRequest $request
     * @param \App\Models\CategoryItemMenu                     $categoryItemMenu
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateCategoryItemMenuRequest $request, CategoryItemMenu $categoryItemMenu )
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\CategoryItemMenu $categoryItemMenu
     * @return \Illuminate\Http\Response
     */
    public function destroy( CategoryItemMenu $categoryItemMenu )
    {
        //
    }
}
