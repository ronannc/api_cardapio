<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $data = $request->all();
        
        return Group::where( function ( $q ) use ( $data ) {
            if ( isset( $data[ 'search' ] ) and $data[ 'search' ] ) {
                $q->where( 'name', 'ilike', '%' . $data[ 'search' ] . '%' )
                    ->orWhere( 'description', 'ilike', '%' . $data[ 'search' ] . '%' );
            }
        } )->simplePaginate();
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
     * @param \App\Http\Requests\StoreGroupRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store( StoreGroupRequest $request )
    {
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param \App\Models\Group $group
     *
     * @return \Illuminate\Http\Response
     */
    public function show( Group $group )
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Group $group
     *
     * @return \Illuminate\Http\Response
     */
    public function edit( Group $group )
    {
        //
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateGroupRequest $request
     * @param \App\Models\Group                     $group
     *
     * @return \Illuminate\Http\Response
     */
    public function update( UpdateGroupRequest $request, Group $group )
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Group $group
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy( Group $group )
    {
        //
    }
}
